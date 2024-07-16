@extends('frontend.layouts.main')
@section('main-content')<div class="broadcasting-panel">
  <div class="container custom-container">
    
    <div class="row">
      <div class="col-lg-3">
        <h1 style="width: min-content;" class="heading heading_page"><span>SEVIMLI</span><strong>Teleloyihalar</strong></h1> 
      </div>
      <div class="d-none d-md-none d-lg-block col-lg-9">
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
<div class="tv-projects">
  <div class="container custom-container">
    <div class="row">
      <div class="col-12">
        <div class="announcements announcements_tv-projects">
          <div class="announcements__list swiper1">
            @foreach ($slides as $slide)
              <div class="announcements__item">
                <div class="announcements__item-inner announcements__item-inner_top">
                  <div class="announcements__bg">
                    <img src="{{asset('images/'.$slide->image)}}" alt="">
                  </div>
                  <div class="announcements__text">
                    <div class="announcements__title">{{$slide->$title}}
                    </div>
                    <div class="announcements__descr">
                      </div>
                    </div>
                    <div class="announcements__previev-column">
                      <div class="announcements__preview-wrp">
                        <div class="announcements__preview-outer">
                          <img src="{{asset('images/'.$slide->image)}}" alt="">
                        </div>
                        <div class="announcements__preview">
                          <img src="{{asset('images/'.$slide->image)}}" alt="">
                        </div>
                      </div>
                      <div class="announcements__btn-wrp">
                        <a class="announcements__btn btn btn_light btn_fixed"  href="{{route('frontend-show-tvshows',$slide->$slug)}}">{{__('messages.see')}}</a>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-20 mb-40">
              <button type="info"></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection