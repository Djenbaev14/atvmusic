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
        <div class="col-12">
          <div>
            <div class="">
              <article class="news-one">
                <p>
                  @if (count($abouts)>0)
                    {!!$abouts[0]->$body!!}
                  @endif
                </p>
              </article>
            </div>
            
          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection