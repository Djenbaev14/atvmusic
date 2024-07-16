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
        <div class="col-12 col-md-8 col-xl-9">
          <div>
            <article class="news-one">
              <h1 class="heading heading_page">
                <span>{{__('messages.news')}}</span>
                <strong>
                  {{$new->$title}}
                </strong>
              </h1>
              <div class="news-one__image">
                <img src="{{asset('images/'.$new->image)}}" alt="">
              </div>
              
              <div class="news-one__content">
                  {!! $new->$description !!}
              </div>
            </article>
          </div>
        </div>
        <div class="col-12 col-md-4 col-xl-3">
          <div class="pg-news__slider" style="height: fit-content">
            <div class="live-slider">
              <div class="live-slider__list">
                <div
                  class="swiper-container swiper-container-initialized swiper-container-horizontal"
                >
                  <div
                    class="swiper-wrapper"
                    style="
                      transform: translate3d(-320px, 0px, 0px);
                      transition-duration: 0ms;
                    "
                  >
                    <div
                      class="swiper-slide live-slider__item swiper-slide-prev"
                      style="width: 290px; margin-right: 30px"
                    >
                      <div class="live-card live-card_radio">
                        <div class="live-card__top">
                          <div class="live-card__type">Radio</div>
                          <div class="live-card__title">
                            Radiostansiya  
                          </div>
                        </div>
                        <div class="live-card__bottom">
                          <a
                            href="https://mediabay.uz/radio"
                            target="_blank"
                            rel="noopener noreferrer"
                            style="
                              color: rgb(255, 255, 255);
                              text-decoration: none;
                            "
                            ><div class="live-card__play-icon">
                              <strong>Yaqinroq bo'l</strong>
                            </div></a
                          >
                        </div>
                        <div
                          class="live-card__icon live-card__icon_radio"
                        >
                          <img
                            src="/static/media/icon-radio.3d7fe210.png"
                            alt=""
                          />
                        </div>
                      </div>
                    </div>
                    <div
                      class="swiper-slide live-slider__item swiper-slide-active"
                      style="width: 290px; margin-right: 30px"
                    >
                      <div class="live-card live-card_tv">
                        <div class="live-card__top">
                          <div class="live-card__type">
                            Jonli efir
                          </div>
                          <div class="live-card__title">
                            AmuwdaryoTVни томоша қилинг
                          </div>
                        </div>
                        <div class="live-card__bottom">
                          <a
                            href="https://mediabay.uz/tv/832/ATV"
                            target="_blank"
                            rel="noopener noreferrer"
                            style="
                              color: rgb(255, 255, 255);
                              text-decoration: none;
                            "
                            ><div class="live-card__play-icon">
                              <strong>Yaqinroq bo'l</strong>
                            </div></a
                          >
                        </div>
                        <div
                          class="live-card__icon live-card__icon_tv"
                        >
                          <img
                            src="/static/media/icon-tv.7a650054.png"
                            alt=""
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <span
                    class="swiper-notification"
                    aria-live="assertive"
                    aria-atomic="true"
                  ></span>
                </div>
              </div>
            </div>
          </div>
          <div class="news-menu news-menu_last">
            <div class="news-menu__title">{{__('messages.latest-news')}}</div>
            <div class="last-news">
              <div class="last-news__list">
                @foreach ($news as $n)
                  <div class="last-news__item">
                    <a class="last-news__title link-dark" href="{{route('frontend-show-news',$new->$slug)}}"> {{$n->$title}} </a>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection