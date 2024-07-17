@extends('frontend.layouts.main')

@section('main-content')

<main class="main-content about-page_content">
  <div class="container">
    <div>
      <p>
        @if (count($abouts)>0)
          {!!$abouts[0]->$body!!}
        @endif
      </p>
  </div>
</main>
@endsection

<link rel="stylesheet" href="{{asset('src/styles/styles.css')}}" />