<?php

namespace App\Http\Controllers;

use App\Models\Treatments;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class TreatmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatments = Treatments::orderBy('id','desc')->get();
        return view('components.treatments', [
            'slides' => $treatments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $treatment = Treatments::all();
        return view('components.addTreat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'required',
            'title_qr' => 'required',
            'description_uz' => 'required',
            'description_qr' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);


        $file = $request->file('image');
        $name = time() . rand(1, 50) . '.' . $file->extension();
        $file->move(public_path('images'), $name);

        $slug_uz = Str::slug($request->title_uz);
        $slug_qr = Str::slug($request->title_qr);
        $count_uz = Treatments::where('slug_uz', 'LIKE', "{$slug_uz}%")->count();
        $count_qr = Treatments::where('slug_qr', 'LIKE', "{$slug_qr}%")->count();
        $slug_uz = $count_uz ? "{$slug_uz}-{$count_uz}" : $slug_uz;
        $slug_qr = $count_qr ? "{$slug_qr}-{$count_qr}" : $slug_qr;

        $slide = new Treatments;
        
        $slide->title_uz = $request->title_uz;
        $slide->title_qr = $request->title_qr;
        $slide->description_uz = $request->description_uz;
        $slide->description_qr = $request->description_qr;
        $slide->image = $name;
        $slide->slug_uz = $slug_uz;
        $slide->slug_qr = $slug_qr;

        $slide->save();
        Alert::success('Успешно', 'Новый категория успешно создан');

        return redirect('admin/treatments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treatments  $treatments
     * @return \Illuminate\Http\Response
     */
    public function show(Treatments $treatments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treatments  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatments $treatment)
    {

        return view('components.editTreat', [
            'slide' => $treatment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treatments  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treatments $treatment)
    {
        
        $request->validate([
            'title_uz' => 'required',
            'title_qr' => 'required',
            'description_uz' => 'required',
            'description_qr' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $file = $request->file('image');
        $name = time() . rand(1, 50) . '.' . $file->extension();
        $file->move(public_path('images'), $name);

        $slug_uz = Str::slug($request->title_uz);
        $slug_qr = Str::slug($request->title_qr);
        $slide = Treatments::findOrFail($treatment->id);

        $slide->title_uz = $request->title_uz;
        $slide->title_qr = $request->title_qr;
        $slide->description_uz = $request->description_uz;
        $slide->description_qr = $request->description_qr;
        $slide->image = $name;
        $slide->slug_uz = $slug_uz;
        $slide->slug_qr = $slug_qr;
        
        $slide->save();
        Alert::success('Успешно', 'Категория успешно изменен');

        return redirect('admin/treatments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treatments  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatments $treatment)
    {

        $treatment->delete();
        Alert::info('Успешно', 'Слайдер удален');

        return redirect('admin/treatments');
    }
}
