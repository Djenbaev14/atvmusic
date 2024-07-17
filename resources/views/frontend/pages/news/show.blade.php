@extends('frontend.layouts.main')
@section('main-content')
<main class="main-content">
  <div class="container">
    <div class="content-inner">
      <div class="content">
        <div class="section-title">
          <span class="desc">{{__('messages.news')}}</span>
          <h3 class="title" style="text-transform: uppercase;">
            {{$new->$title}}
          </h3>
        </div>
        <div class="body">
          <img src="{{asset('images/'.$new->image)}}" alt="news" />
          <p>{!! $new->$description !!}</p>
        </div>
      </div>
      <div class="sidebar">
        <div class="sidebar-slide">
          <div class="card_top">
            <p class="top-title">YOUTUBE</p>
            <p class="title">AmuwdaryoTv YouTube</p>
          </div>
          <a href="#" class="card_bottom link"> Yaqinroq bo'l </a>
          <img src="{{asset('src/images/tv-cards/tv-card-2.png')}}" alt="card image" />
        </div>
        <div class="hot_news__list">
          <h3 class="title">{{__('messages.latest-news')}}</h3>
          @foreach ($news as $n)
            <div class="news-box">
              {{-- <a class="last-news__title link-dark" href="{{route('frontend-show-news',$new->$slug)}}"> {{$n->$title}} </a> --}}
              <p>{{$n->$title}}</p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
@push('css')
  <link rel="stylesheet" href="{{asset('src/styles/pages/news.css')}}" />
@endpush