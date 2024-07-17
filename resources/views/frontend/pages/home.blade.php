@extends('frontend.layouts.main')

@section('main-content')
    <!-- Section Live -->
    <section class="section-live">
      <div class="container">
        <div class="section-title">
          <span class="desc">{{__('messages.our')}}</span>
          <h3 class="title">{{__('messages.live')}}</h3>
        </div>
        {{-- <div class="section-inner">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/HmhiTJyk18c?si=Lc0SkoIZC8Q4B64x"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          ></iframe>
        </div> --}}
        
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
    <!-- =================================== -->

    <!-- Section previews -->
    <section class="section-previews">
      <div class="container">
        <div class="section-inner">
          <!-- Swiper -->
          <div class="swiper swiper-tvProjects">
            <div class="swiper-wrapper">
              @foreach ($slides as $slide)
              <div class="swiper-slide">
                <div
                  class="slide-bg"
                  style="
                    background: url('{{asset('images/'.$slide->image)}}');
                  "
                ></div>
                <img src="{{asset('images/'.$slide->image)}}" />
                <a href="{{route('frontend-show-tvshows',$slide->$slug)}}" class="watch-btn">{{__('messages.see')}}</a>
              </div>
              @endforeach
            </div>
            <div class="swiper-buttons">
              <div class="swiper-button-next slide-btn">
                <i class="fa-solid fa-arrow-right-long"></i>
              </div>
              <div class="swiper-button-prev slide-btn">
                <i class="fa-solid fa-arrow-left-long"></i>
              </div>
            </div>
          </div>
          <div class="swiper tv-cards">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card_top">
                  <p class="top-title">YOUTUBE</p>
                  <p class="title">AmuwdaryoTv YouTube</p>
                </div>
                <a href="#" class="card_bottom link"> Yaqinroq bo'l </a>
                <img
                  src="./src/images/tv-cards/tv-card-1.png"
                  alt="card image"
                />
              </div>
              <div class="swiper-slide">
                <div class="card_top">
                  <p class="top-title">YOUTUBE</p>
                  <p class="title">AmuwdaryoTv YouTube</p>
                </div>
                <a href="#" class="card_bottom link"> Yaqinroq bo'l </a>
                <img
                  src="./src/images/tv-cards/tv-card-2.png"
                  alt="card image"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================================--- -->

    <!-- Section news -->
    <section class="section-news">
      <div class="container">
        <div class="section-inner">
          <!-- Section title -->
          <div class="section-title">
            <span class="desc">{{__('messages.last')}}</span>
            <h3 class="title">{{__('messages.news')}}</h3>
            <a href="#" class="title_link">
              <span>{{__('messages.all-news')}}</span>
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
            </a>
          </div>
          <!-- ----------------------------------- -->
          <div class="news-grid_box">
            @for ($i = 0; $i < count($news); $i++)
              <div class="news-item_box">
                <div class="news-item_inner">
                  <a href="{{route('frontend-show-news',$news[$i]->$slug)}}" class="news-item_link"></a>
                  <img src="{{asset('images/'.$news[$i]->image)}}" alt="news image" />
                  <div class="news_body">
                    <div class="news-item_timeBox">
                      <div class="left">{{ $news[$i]->created_at->format('d') }}</div>
                      <div class="right">
                        <p class="time">{{ $news[$i]->created_at->format('H:i') }}</p>
                        <p class="month">{{ $news[$i]->created_at->format('F') }}</p>
                      </div>
                    </div>
                    <div class="news__title">
                      <span >{{$news[0]->$title}}</span>
                    </div>
                  </div>
                </div>
              </div>
            @endfor
          </div>
        </div>
      </div>
    </section>
    <!-- ================================ -->

    <!-- Section Tv-Projects -->
    <section class="section-tv_projects">
      <div class="container">
        <div class="section-title">
          <p class="desc">{{__('messages.our')}}</p>
          <h4 class="title">{{__('messages.tele_projects')}}</h4>
        </div>
        <div class="section-inner">
          <div class="swiper tvProjects2">
            <div class="swiper-wrapper">
              @foreach ($slides as $slide)
                <div class="swiper-slide">
                  <a href="{{route('frontend-show-tvshows',$slide->$slug)}}" class="tv-project_swiper__link"></a>
                  <img
                    src="{{asset('images/'.$slide->image)}}"
                    alt="tv project"
                  />
                  <p class="title">{{$slide->$title}}</p>
                </div>
              @endforeach
            </div>
            <div class="swiper-button-next">
              <i class="fa-solid fa-arrow-right-long"></i>
            </div>
            <div class="swiper-button-prev">
              <i class="fa-solid fa-arrow-left-long"></i>
            </div>
            <a href="{{route('frontend-tvshows')}}" class="show-more">{{__('messages.all_tele_projects')}}</a>
          </div>
        </div>
      </div>
    </section>
    <!-- =============================== -->

    <!-- Section Report -->
    <section class="section-report">
      <div class="container">
        <div class="top">
          <h4 class="title">{{__('messages.numbers-report')}}</h4>
          <p class="desc">
            {{__('messages.item-sub-heading-1')}}<b>AA
              №0006322</b> {{__('messages.item-sub-heading-2')}}
          </p>
        </div>
        <div class="section-inner">
          <div class="report-grid-box">
            <div class="report-box">
              <img src="./src/images/reports/report-1.png" alt="report image" />
              <div class="body">
                <p class="count">17</p>
                <p class="desc">
                  {{__('messages.item-number-name-1')}}
                </p>
              </div>
            </div>
            <div class="report-box">
              <img src="./src/images/reports/report-2.png" alt="report image" />
              <div class="body">
                <p class="count">2005</p>
                <p class="desc">
                  {{__('messages.item-number-name-2')}}
                </p>
              </div>
            </div>
            <div class="report-box">
              <img src="./src/images/reports/report-3.png" alt="report image" />
              <div class="body">
                <p class="count">20</p>
                <p class="desc">
                  {{__('messages.item-number-name-3')}}
                </p>
              </div>
            </div>
            <div class="report-box">
              <img src="./src/images/reports/report-4.png" alt="report image" />
              <div class="body">
                <p class="count">610</p>
                <p class="desc">
                  {{__('messages.item-number-name-4')}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =================================== -->

@endsection
@push('css')
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  <link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet">
  <style>
    .video-js .vjs-big-play-button{
      left:50% !important;
      top:45% !important; 
      }
      #my-video{
        width: 100%;
         }
  </style>
@endpush
@push('js')
  <script src="https://vjs.zencdn.net/7.14.3/video.js"></script>
  <script>
    // Swiper Tv Projects
    var swiper = new Swiper(".swiper-tvProjects", {
      spaceBetween: 30,
      slidesPerView: 2,
      loop: true,
      effect: "fade",
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });

    // Swiper Cards
    var swiper = new Swiper(".tv-cards", {
      effect: "flip",
      grabCursor: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });

    // Tv Projects2
    var swiper = new Swiper(".tvProjects2", {
      slidesPerView: 3,
      spaceBetween: 120,
      loop: true,
      breakpoints: {
        380: {
          slidesPerView: 1,
          spaceBetween: 20,
        },

        800: {
          slidesPerView: 2,
          spaceBetween: 20,
        },

        992: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
@endpush