@extends('frontend.layouts.main')
@section('main-content')
  <div class="container custom-container">
    <div class="row">
      <div class="d-none d-md-none d-lg-block col-lg-12">
        <div class="">
          <div class="social-links">
            <div class="social-links__list">
              <div class="social-links__item">
                <a
                  class="social-links__link"
                  target="_blank"
                  href="https://www.facebook.com/AmudaryoTVttv"
                  ><img
                    class="social-links__icon"
                    src="{{asset('frontend/img/icon-facebook.svg')}}"
                    alt="alt"
                    title=""
                /></a>
              </div>
              <div class="social-links__item">
                <a
                  class="social-links__link"
                  target="_blank"
                  href="https://www.instagram.com/AmudaryoTV_tv/?hl=ru"
                  ><img
                    class="social-links__icon"
                    src="{{asset('frontend/img/icon-instagram.svg')}}"
                    alt="alt"
                    title=""
                /></a>
              </div>
              <div class="social-links__item">
                <a
                  class="social-links__link"
                  target="_blank"
                  href="https://t.me/AmudaryoTV_tv"
                  ><img
                    class="social-links__icon telegram"
                    src="{{asset('frontend/img/icon-telegram.svg')}}"
                    alt="alt"
                    title=""
                /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container custom-container">
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
              {{-- <h3 class="proj-header__title">{{__('messages.news')}}</h3> --}}
            </div>
            <div class="proj-header__text">
              <p>{!! $tvshow->$description !!}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="series-wrp" style="margin-bottom: 50px">
        <h2>{{__('messages.instant-news')}}!</h2>
        <div class="series-wrp__list">
          @foreach ($news as $new)
            <div class="series-wrp__item">
              <div class="series-card series-card_small">
                <a class="series-card__link" href="{{route('frontend-show-news',$new->$slug)}}"></a>
                <div class="series-card__image">
                  <img src="{{asset('images/'.$new->image)}}" alt=""/>
                </div>
                <div class="series-card__content">
                  <div class="series-card__mini-info">
                    <strong>{{$new->$title}}</strong>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection