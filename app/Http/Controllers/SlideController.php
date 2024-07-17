<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\SlideTranslation;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::orderBy('id','desc')->get();
        return view('components.slides', [
            'slides' => $slides
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $language = config('translatable.languages');
        return view('components.addSlide', [
            'languages' => $language
        ]);
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
        $count_uz = Slide::where('slug_uz', 'LIKE', "{$slug_uz}%")->count();
        $count_qr = Slide::where('slug_qr', 'LIKE', "{$slug_qr}%")->count();
        $slug_uz = $count_uz ? "{$slug_uz}-{$count_uz}" : $slug_uz;
        $slug_qr = $count_qr ? "{$slug_qr}-{$count_qr}" : $slug_qr;

        $slide = new Slide;
        $slide->title_uz = $request->title_uz;
        $slide->title_qr = $request->title_qr;
        $slide->description_uz = $request->description_uz;
        $slide->description_qr = $request->description_qr;
        $slide->image = $name;
        $slide->slug_uz = $slug_uz;
        $slide->slug_qr = $slug_qr;

        // foreach ($languages as $key => $value) {
        //     if ($data[$key . '_']['title'] && $data[$key . '_']['description']) {
        //         $slide->translateOrNew($key)->title = $data[$key . '_']['title'];
        //         $slide->translateOrNew($key)->description = $data[$key . '_']['description'];
        //     }
        // }
        $slide->save();
        Alert::success('Успешно', 'Новый слайдер успешно создан');

        return redirect('admin/slides');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        return view('components.editSlide', [
            'slide' => $slide
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
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
        $input['image'] = "$name";

        $slug_uz = Str::slug($request->title_uz);
        $slug_qr = Str::slug($request->title_qr);

        $slide = Slide::findOrFail($slide->id);

        $slide->title_uz = $request->title_uz;
        $slide->title_qr = $request->title_qr;
        $slide->description_uz = $request->description_uz;
        $slide->description_qr = $request->description_qr;
        $slide->image = $name;
        $slide->slug_uz = $slug_uz;
        $slide->slug_qr = $slug_qr;


        $slide->save();
        Alert::success('Успешно', 'Слайд успешно изменен');

        return redirect('admin/slides');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        $slide->delete();
        Alert::info('Успешно', 'Слайдер удален');

        return redirect('admin/slides');
    }
}
