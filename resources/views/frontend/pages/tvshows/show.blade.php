@extends('frontend.layouts.main')
@section('main-content')
  
  
  <main class="main-content">
    <div class="container">
      <div class="content-inner">
        <div class="pg-project-inside">
          <div class="proj-header pg-project-inside__header">
            <div class="proj-header__image">
              <img src="{{asset('images/'.$tvshow->image)}}" alt="">
            </div>
            <div class="proj-header__body">
              <div class="proj-header__thumb">
                <img src="{{asset('images/'.$tvshow->image)}}" alt="">
              </div>
              <div class="proj-header__content">
                <div class="proj-header__title-wrp">
                  <h3 class="proj-header__title">{{__('messages.news')}}</h3>
                </div>
                <div class="proj-header__text">
                  <p>{!! $tvshow->$description !!}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hot-news__list">
          @foreach ($news as $new)
            <div class="news-box">
              <a href="{{route('frontend-show-news',$new->$slug)}}"></a>
              <img src="{{asset('images/'.$new->image)}}" alt="news image" />
              <div class="body">
                <h3 class="title" style="text-transform: uppercase;">
                  {{$new->$title}}
                </h3>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </main>

@endsection
@push('css')
    
  <link rel="stylesheet" href="{{asset('src/styles/pages/tv-shows.css')}}" />
  <link href="{{asset('src/styles/pages/123.css')}}" rel="stylesheet" />
@endpush