
<header class="header">
  <div class="container">
    <div class="header-inner">
      <a href="/" class="logo">
        <img src="{{asset('src/images/logo/logo.png')}}" alt="Logo image" />
      </a>
      <ul class="header-menu">
        <button class="close-header_menu__bar">&times;</button>
        <li class="header-menu_item">
          <a href="/" class="header-menu_link"> {{__('messages.homepage')}} </a>
        </li>
        <li class="header-menu_item">
          <a href="{{route('frontend-news')}}" class="header-menu_link">
            {{__('messages.news')}}
          </a>
        </li>
        <li class="header-menu_item">
          <a href="{{route('frontend-tvshows')}}" class="header-menu_link">
            {{__('messages.tele_projects')}}
          </a>
        </li>
        <li class="header-menu_item">
          <a href="{{route('frontend-about')}}" class="header-menu_link">
            {{__('messages.about_us')}}
          </a>
        </li>
      </ul>
      <div class="mobile-header_menu">
        <div>
          <img src="{{asset('src/images/mobile-images/image-1.png')}}" alt="image" />
        </div>
        <div>
          <img src="{{asset('src/images/mobile-images/image-2.png')}}" alt="image" />
        </div>
      </div>
      <button class="header-bar"><i class="fa-solid fa-bars"></i></button>
      <div class="lang-switch_box">
        <p>{{__('messages.choose_language')}}</p>
        <ul class="lang-switch__drop-down">
          @foreach (config('translatable.languages') as $local)
          <li class="lang-switch_item">
            <a href="{{route('local',$local['lang'])}}" class="lang-switch__link"  <?=($local['lang']==session('locale')) ?  "style='font-weight: bold'" : '' ;?>>{{$local['local']}}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <ul class="social-links">
      <li>
        <a href="https://www.facebook.com/AmudaryoTVttv" class="link">
          <div class="social-box">
            <span class="icon">
              <i class="fa-brands fa-facebook-f"></i>
            </span>
            <span class="title">facebook</span>
          </div>
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/AmudaryoTV_tv/" class="link">
          <div class="social-box">
            <span class="icon">
              <i class="fa-brands fa-instagram"></i>
            </span>
            <span class="title">instagram</span>
          </div>
        </a>
      </li>
      <li>
        <a href="https://t.me/AmudaryoTV_tv" class="link">
          <div class="social-box">
            <span class="icon">
              <i class="fa-brands fa-telegram"></i>
            </span>
            <span class="title">telegram</span>
          </div>
        </a>
      </li>
    </ul>
  </div>
</header>