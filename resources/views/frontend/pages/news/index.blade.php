@extends('frontend.layouts.main')
@section('main-content')
  <div class="broadcasting-panel">
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
  </div>
  <div class="container custom-container">
    <div class="pg-news">
      <div class="row">
        <div class="col-12 col-md-12 col-xl-12">
          <div class="pg-news__list">
            @foreach ($news as $new)
            <div class="pg-news__item">
              <div class="news news_tiled">
                <a class="news__link" href="{{route('frontend-show-news',$new->$slug)}}"></a>
                <div class="news__image">
                  <img src="{{asset('images/'.$new->image)}}" alt=""/>
                </div>
                <div class="news__content">
                  <h3 class="news__title" style="-webkit-box-orient: vertical; fonst-size:20px">
                    <span>{{$new->$title}}</span>
                  </h3>
                  <div class="news__time"><div class="news-date news-date_dark"><div class="news-date__day">{{$new->created_at->format('d')}}</div><div class="news-date__rest"><div class="news-date__time">{{$new->created_at->format('h:i')}}</div><div class="news-date__month">{{$new->created_at->format('F')}}</div></div></div></div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection