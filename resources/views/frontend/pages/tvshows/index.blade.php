@extends('frontend.layouts.main')
@section('main-content')
<main class="main-content">
  <div class="container">
    <div class="section-title">
      <span class="desc">{{__('messages.favorite')}}</span>
      <h3 class="title">{{__('messages.tele_projects')}}</h3>
    </div>

    <div class="tv-shows_list">
      @foreach ($slides as $slide)
        <div class="tv-show_box">
          <div class="tv-show__bg">
            <img
              src="{{asset('images/'.$slide->image)}}"
              alt="image tv project"
            />
          </div>
          <div class="left">
            <p class="title">{{$slide->$title}}</p>
          </div>
          <div class="right">
            <img src="{{asset('images/'.$slide->image)}}" alt="tv-show" />
            <a href="{{route('frontend-show-tvshows',$slide->$slug)}}" class="show-btn">{{__('messages.see')}}</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</main>
@endsection
@push('css')
  <link rel="stylesheet" href="{{asset('src/styles/pages/all-tv-shows.css')}}" />
@endpush