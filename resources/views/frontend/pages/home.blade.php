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
  <section class="pg-section pg-section_white pg-section_projects">
    <div class="container custom-container">
      <div class="pg-section__header">
        <h1 class="heading">
          <span>{{__('messages.our')}}</span><strong>
            {{__('messages.live')}}</strong>
        </h1>
      </div>
    <div class="live-efir">
      <style> 
      
          #my-video {
                    position: relative;
                          width: 100%;
                    padding-bottom: 56.25%; /* 16:9 aspect ratio (9 / 16 * 100) */

                }
              
                #my-video video {
                      position: absolute;
                      top: 0;
                      left: 0;
                      width: 100%;
                      height: 100%;
                }
      </style>
      <video id="my-video" class="video-js" autoplay controls preload="auto"   data-setup="{}">
        <source src="https://st4.mediabay.uz/AMU_TV/index.m3u8" type="application/x-mpegURL">
        <!-- Additional video sources (if needed) -->
        <!-- <source src="video.webm" type="video/webm"> -->
        <!-- <source src="video.ogv" type="video/ogg"> -->
        <!-- Fallback for browsers that don't support HTML5 video -->
        Your browser does not support the video tag.
      </video>
    
    </div>
    </div>
  </section>
  <div class="main-previews">
    
    <div class="container custom-container">
      <div class="row">
        <div class="col-12 col-lg-9" style="z-index: 2">
            <div class="announcements announcements_home">

              <div class="announcements__list">
                <div class="swiper-container swiper1 swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-fade swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
                  <div class="swiper-wrapper slider-1">
                    @foreach ($slides as $slide)
                      <div class="swiper-slide announcements__item" >
                        <div class="announcements__item-inner announcements__item-inner_top">
                              <div class="announcements__bg">
                                    <img src="{{asset('images/'.$slide->image)}}"alt=""/>
                              </div>
                              <div class="announcements__text">
                                  <div class="announcements__title">
                                    {{$slide->$title}}
                                  </div>
                              </div>
                              <div class="announcements__previev-column">
                                  <div class="announcements__preview-wrp">
                                      <div class="announcements__preview-outer">
                                            <img src="{{asset('images/'.$slide->image)}}" alt=""/>
                                      </div>
                                      <div class="announcements__preview">
                                            <img src="{{asset('images/'.$slide->image)}}" alt=""/>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="announcements__item-inner">
                                  <div class="announcements__descr" style="-webkit-box-orient: vertical" >
                                          <p>
                                          
                                          </p>
                                    </div>
                                    <div class="announcements__btn-wrp">
                                          <a class="announcements__btn btn btn_light btn_fixed" href="{{route('frontend-show-tvshows',$slide->$slug)}}"
                                            >{{__('messages.see')}}</a
                                          >
                                    </div>
                              </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="announcements__arrows"><div class="nav-btn nav-btn_left nav-btn_light"><svg width="12" height="10" version="1" xmlns="http://www.w3.org/2000/svg"><path d="M11 4H3l3-2V1L5 0 0 5l5 5 1-1a1 1 0 0 0 0-1L3 6h8l1-1-1-1z" fill-rule="nonzero"></path></svg></div><div class="nav-btn nav-btn_right nav-btn_light"><svg width="12" height="10" version="1" xmlns="http://www.w3.org/2000/svg"><path d="M1 4h8L6 2V1l1-1 5 5-5 5-1-1a1 1 0 0 1 0-1l3-2H1L0 5l1-1z" fill-rule="nonzero"></path></svg></div></div>
                </div>
              </div>
            </div>
          
          

          
        </div>
        
        <div class="d-none d-sm-none d-md-none d-lg-block col-lg-3">
          <div class="live-slider">
            <div class="live-slider__list swiper2">
              <div class="swiper-wrapper">
                <div class="swiper-slide live-slider__item">
                  <div class="live-card live-card_radio">
                    <div class="live-card__top">
                      <div class="live-card__type">You Tube</div>
                      <div class="live-card__title">
                        AmuwdaryoTv YouTube
                      </div>
                    </div>
                    <div class="live-card__bottom">
                      <a
                        href="https://www.youtube.com/c/ATVtelekanali"
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
                        src="{{asset('frontend/static/media/icon-radio.3d7fe210.png')}}"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
                <div class="swiper-slide live-slider__item">
                  <div class="live-card live-card_tv">
                    <div class="live-card__top">
                      <div class="live-card__type">Jonli efir</div>
                      <div class="live-card__title">
                        AmudaryoTV jonli efir
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
                    <div class="live-card__icon live-card__icon_tv">
                      <img
                        src="{{asset('frontend/static/media/icon-tv.7a650054.png')}}"
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
    </div>
  </div>
  <div class="broadcast-slider">
    <div class="broadcast-slider__list">
      <div class="container">
        <div
          class="swiper-container swiper-container-initialized swiper-container-horizontal"
        >
          <div
            class="swiper-wrapper"
            style="transition-duration: 0ms"
          ></div>
          <span
            class="swiper-notification"
            aria-live="assertive"
            aria-atomic="true"
          ></span>
        </div>
      </div>
    </div>
  </div>
  <section class="pg-section pg-section_white">
    <div class="container custom-container">
      <div class="pg-section__header">
        <h1 class="heading">
          <span>{{__('messages.last')}}</span><strong>{{__('messages.news')}}</strong>
        </h1>
        <div class="pg-section__nav">
          <a class="arrowed-link arrowed-link_prime" href="#"
            ><a class="link mr-3" href="{{route('frontend-news')}}">{{__('messages.all-news')}}</a
            ><svg
              width="12"
              height="10"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M1 4h8L6 2V1l1-1 5 5-5 5-1-1a1 1 0 0 1 0-1l3-2H1L0 5l1-1z"
                fill-rule="nonzero"
              ></path></svg></a>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6 big">
          <div class="news news_big">
            @if (count($news)>0)
              <a class="news__link" href="{{route('frontend-show-news',$news[0]->$slug)}}"></a><img src="{{asset('images/'.$news[0]->image)}}" alt="" class="news__main-img">
              <div class="news__overlay"></div>
              <div class="news__time"><div class="news-date news-date_light"><div class="news-date__day">{{ $news['0']->created_at->format('d') }}</div><div class="news-date__rest"><div class="news-date__time">{{ $news['0']->created_at->format('h:i') }}</div><div class="news-date__month">{{ $news['0']->created_at->format('F') }}</div></div></div></div>
              <h3 class="news__title">
                <span>{{$news[0]->$title}}</span>
              </h3>
            @endif
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="news-box">
            <div class="news news_tiled">
                @if (count($news)>1)
                  <a class="news__link" href="{{route('frontend-show-news',$news[1]->$slug)}}"></a>
                  <div class="news__image">
                    <img src="{{asset('images/'.$news[1]->image)}}" alt="" />
                  </div>
                  
                  <div class="news__content">
                    <h3 class="news__title" style="-webkit-box-orient: vertical">
                      <span>{{$news[1]->$title}}</span>
                    </h3>
                    <div class="news__time"><div class="news-date news-date_dark"><div class="news-date__day">{{ $news['1']->created_at->format('d') }}</div><div class="news-date__rest"><div class="news-date__time">{{ $news['1']->created_at->format('h:i') }}</div><div class="news-date__month">{{ $news['1']->created_at->format('F') }}</div></div></div></div>
                  </div>
                @endif
            </div>
            <div class="news-box__row">
              @if (count($news)>2)
                <div class="news news_simple">
                  <a
                    class="news__link" href="{{route('frontend-show-news',$news[2]->$slug)}}" ></a>
                  <div class="news__top">
                    <div class="news__image">
                      <img
                        src="{{asset('images/'.$news[2]->image)}}"
                        alt=""
                      />
                    </div>
                    <div class="news__time"><div class="news-date news-date_dark"><div class="news-date__day">{{ $news['2']->created_at->format('d') }}</div><div class="news-date__rest"><div class="news-date__time">{{ $news['2']->created_at->format('h:i') }}</div><div class="news-date__month">{{ $news['2']->created_at->format('m') }}</div></div></div></div>
                    
                  </div>
                  <h3 class="news__title">
                    <span>{{$news['2']->$title}}</span>
                  </h3>
                </div>
                @if (count($news)>3)
                    
                <div class="news news_simple">
                  <a class="news__link" href="{{route('frontend-show-news',$news[3]->$slug)}}"></a>
                  <div class="news__top">
                    <div class="news__image">
                      <img src="{{asset('images/'.$news[3]->image)}}" alt=""/>
                    </div>
                    <div class="news__time"><div class="news-date news-date_dark"><div class="news-date__day">{{ $news['3']->created_at->format('d') }}</div><div class="news-date__rest"><div class="news-date__time">{{ $news['3']->created_at->format('h:i') }}</div><div class="news-date__month">{{ $news['2']->created_at->format('m') }}</div></div></div></div>
                  </div>
                  <h3 class="news__title">
                    <span>{{ $news['3']->$title}}</span
                    >
                  </h3>
                </div>
                @endif
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pg-section pg-section_white pg-section_projects">
    <div class="container custom-container">
      <div class="pg-section__header">
        <h1 class="heading">
          <span>{{__('messages.our')}}</span><strong>
            {{__('messages.tele_projects')}}</strong>
        </h1>
      </div>
      <div class="tv-projects">
        <div class="tv-projects__list">
          <div class="swiper swiper3">
            <div class="swiper-wrapper slider-2">
              @foreach ($slides as $slide)
                <div class="swiper-slide">
                  <div class="tv-projects__item">
                    <div class="project-card">
                      <a class="project-card__link" href="/tvshows.html"
                      ></a>
                      <div class="project-card__image">
                        <img
                          src="{{asset('images/'.$slide->image)}}"
                          alt=""
                        />
                      </div>
                      <div class="project-card__content">
                        <div class="project-card__title"> {{$slide->$title}}</div>
                        <div class="project-card__descr">
                        
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
            <span
              class="swiper-notification"
              aria-live="assertive"
              aria-atomic="true"
            ></span>
          </div>
        </div>
      
        <div class="tv-projects__nav">
          <a class="tv-projects__btn btn btn_dark" href="{{route('frontend-tvshows')}}"
            >{{__('messages.all_tele_projects')}}</a
          >
          <div class="tv-projects__slr-nav">
            <div class="tv-projects__slr-nav-left">
              <button class="nav-btn nav-btn_left nav-btn_dark">
                <svg
                  width="12"
                  height="10"
                  version="1"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M11 4H3l3-2V1L5 0 0 5l5 5 1-1a1 1 0 0 0 0-1L3 6h8l1-1-1-1z"
                    fill-rule="nonzero"
                  ></path>
                </svg>
              </button>
            </div>
            <div class="tv-projects__slr-nav-right">
              <button class="nav-btn nav-btn_right nav-btn_dark">
                <svg
                  width="12"
                  height="10"
                  version="1"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1 4h8L6 2V1l1-1 5 5-5 5-1-1a1 1 0 0 1 0-1l3-2H1L0 5l1-1z"
                    fill-rule="nonzero"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <div class="main-stat hidden-sm hidden-xs">
    <div class="container">
      <h2 class="item-heading">
        {{__('messages.numbers-report')}}
      </h2>
      <div class="items">
        <h2 class="item-sub-heading">
          {{__('messages.item-sub-heading-1')}} <b>AA №0006322</b> {{__('messages.item-sub-heading-2')}}
        </h2>
        <div class="row">
          <div class="col-xs-6">
            <div class="item">
              <div class="hvr-float">
                <div class="item-box">
                  <img
                    width="180"
                    height="180"
                    src="{{asset('frontend/static/media/437deb57eba3092ef253a2999bb39e38.png')}}"
                    alt="12"
                  />
                  <div class="item-number">
                    <span
                      class="item-count item-stat-number"
                      data-decimal="0"
                      >17</span
                    >
                  </div>
                  <div
                    class="item-number-name"
                    style="text-transform: uppercase"
                  >
                  {{__('messages.item-number-name-1')}}
                  </div>
                  <div class="item-desc"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="item">
              <div class="hvr-float">
                <div class="item-box">
                  <!--<i class="item-icon sprite-icon sprite-icon-line"></i>-->
                  <img
                    width="180"
                    height="180"
                    src="{{asset('frontend/static/media/f70c1cbcd45c8bd0a810ff84bd0577a6.png')}}"
                    alt=""
                    class=""
                  />
                  <div class="item-number">
                    <span
                      class="item-count item-stat-number"
                      data-decimal="0"
                      >2005</span
                    >
                  </div>
                  <div
                    class="item-number-name"
                    style="text-transform: uppercase"
                  >
                  {{__('messages.item-number-name-2')}}
                  </div>
                  <div class="item-desc"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr />
        <br />
        <br />
        <div class="row">
          <div class="col-xs-6">
            <div class="item">
              <div class="hvr-float">
                <div class="item-box">
                  <!--<i class="item-icon sprite-icon sprite-icon-line"></i>-->
                  <img
                    width="180"
                    height="180"
                    src="{{asset('frontend/static/media/607e330c1aa7782ee65374375de963b1.png')}}"
                    alt=""
                    class=""
                  />
                  <div class="item-number">
                    <span
                      class="item-count item-stat-number"
                      data-decimal="0"
                      >20</span
                    >
                  </div>
                  <div
                    class="item-number-name"
                    style="text-transform: uppercase"
                  >
                  {{__('messages.item-number-name-3')}}
                  </div>
                  <div class="item-desc"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="item">
              <div class="hvr-float">
                <div class="item-box">
                  <!--<i class="item-icon sprite-icon sprite-icon-line"></i>-->
                  <img
                    width="180"
                    height="180"
                    src="{{asset('frontend/static/media/437deb57eba3092ef253a2999bb39e38.png')}}"
                    alt=""
                    class=""
                  />
                  <div class="item-number">
                    <span
                      class="item-count item-stat-number"
                      data-decimal="0"
                      >610</span
                    >
                  </div>
                  <div
                    class="item-number-name"
                    style="text-transform: uppercase"
                  >
                  {{__('messages.item-number-name-4')}}
                    <br />
                  </div>
                  <div class="item-desc"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .container -->
  </div>
  
@endsection
@push('css')
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />

@endpush
@push('js')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper(".swiper1", {
    speed: 400,
    spaceBetween: 100,
    effect: "fade", 
    slidesPerView: 1,
    
      autoplay: {
    delay: 3000, // Set the delay in milliseconds (e.g., 5000 for 5 seconds)
    disableOnInteraction: false, // Set to false if you want autoplay to continue even when the user interacts with the slider
  },
        navigation: {
          nextEl: ".nav-btn_right",
          prevEl: ".nav-btn_left ",
        },
      });
</script>

<script>
  const swiper2 = new Swiper(".swiper2", {
    speed: 400,
    spaceBetween: 100,
    autoplay: {
        delay: 3000, // Set the delay in milliseconds (e.g., 5000 for 5 seconds)
        disableOnInteraction: false, // Set to false if you want autoplay to continue even when the user interacts with the slider
      },
    loop: true,
  });
</script>
<script>
  const swiper3 = new Swiper(".swiper3", {
    slidesPerView: 1,
    slidesToScroll:1,
    speed: 400,
    spaceBetween: 100,
    loop: true,

    autoplay: {
    delay: 3000, // Set the delay in milliseconds (e.g., 5000 for 5 seconds)
    disableOnInteraction: false, // Set to false if you want autoplay to continue even when the user interacts with the slider
  },
    navigation: {
      nextEl: ".nav-btn_right",
      prevEl: ".nav-btn_left ",
    },
    breakpoints: {
    // When window width is <= 576px
    576: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    // When window width is <= 768px
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    // When window width is <= 992px
    992: {
      slidesPerView: 2,
      spaceBetween: 50,
    },
    // When window width is <= 1200px
    1200: {
      slidesPerView: 3,
      spaceBetween: 100,
    },
  },
  });
</script>
<script>
  let burger = document.querySelector(".menu.btn1");
  let header = document.querySelector(".header");
  burger.addEventListener("click", () => {
    header.classList.toggle("opened");
  });
</script>
@endpush