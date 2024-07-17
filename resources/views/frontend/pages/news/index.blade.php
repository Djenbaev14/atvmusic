@extends('frontend.layouts.main')
@section('main-content')
<main class="main-content">
  <div class="container">
    <div class="content-inner">
      <div class="news-list">
        @foreach ($news as $new)
          <div class="news-box">
            <a href="{{route('frontend-show-news',$new->$slug)}}"></a>
            <div class="left">
              <img src="{{asset('images/'.$new->image)}}" alt="news image" />
            </div>
            <div class="right body">
              <p class="title">
                {{$new->$title}}
              </p>
              <div class="time-box">
                <div class="left">{{$new->created_at->format('d')}}</div>
                <div class="right">
                  <p class="time">{{$new->created_at->format('h:i')}}</p>
                  <p class="month">{{$new->created_at->format('F')}}</p>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</main>
@endsection

@push('css')
  <link rel="stylesheet" href="{{asset('src/styles/pages/all-news.css')}}" />
@endpush