<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{

    public function index(){
        $body  = About::all();
        return view('components.about', [
            'body' => $body
        ]);
    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(About::count()>0){
            $slide =  About::findOrFail(1);
            $slide -> body_uz = $request->body_uz;
            $slide -> body_qr = $request->body_qr;
            $slide->save();
        }else{
            $slide = new About();
            $slide -> body_uz = $request->body_uz;
            $slide -> body_qr = $request->body_qr;
            $slide->save();
        }
        
        Alert::success('Успешно', 'О нас успешно изменено');
        return redirect('admin/about');
    }

}
