<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Slide;
use App\Models\Treatments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index(){
        if(!session('locale')){
            Session::put("locale",config('translatable.locale'));
        }
        $title='title_'.session()->get('locale');
        $body='body_'.session()->get('locale');
        $slug='slug_'.session()->get('locale');
        $slides=Slide::orderBy('id','desc')->limit(5)->get();
        $news=Treatments::orderBy('id','desc')->limit(4)->get();
        return view('frontend.pages.home',compact('slides','news','title','body','slug'));
    }
    public function news(){
        
        $title='title_'.session()->get('locale');
        $body='body_'.session()->get('locale');
        $slug='slug_'.session()->get('locale');
        $news=Treatments::orderBy('id','desc')->get();
        return view('frontend.pages.news.index',compact('news','title','body','slug'));
    }
    public function showNews($slug){
        
        $new = Treatments::where('slug_uz', 'LIKE', "{$slug}%")->orWhere('slug_qr', 'LIKE', "{$slug}%")->first();
        $title='title_'.session()->get('locale');
        $description='description_'.session()->get('locale');
        $slug='slug_'.session()->get('locale');
        $news=Treatments::orderBy('id','desc')->get();
        return view('frontend.pages.news.show',compact('news','new','title','description','slug'));
    }
    public function tvshows(){
        
        $title='title_'.session()->get('locale');
        $body='body_'.session()->get('locale');
        $slug='slug_'.session()->get('locale');
        $slides=slide::orderBy('id','desc')->get();
        return view('frontend.pages.tvshows.index',compact('slides','title','body','slug'));
    }
    public function showTvshows($slug){
        $tvshow = Slide::where('slug_uz', 'LIKE', "{$slug}%")->orWhere('slug_qr', 'LIKE', "{$slug}%")->first();
        $title='title_'.session()->get('locale');
        $description='description_'.session()->get('locale');
        $slug='slug_'.session()->get('locale');
        $news=Treatments::orderBy('id','desc')->get();
        return view('frontend.pages.tvshows.show',compact('news','tvshow','title','description','slug'));
    }
    public function about(){
        
        $body='body_'.session()->get('locale');
        $abouts=About::get();
        return view('frontend.pages.about',compact('abouts','body'));
    }
}
