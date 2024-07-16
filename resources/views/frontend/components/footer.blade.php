
<footer class="page-footer">
  <footer class="footer">
    <div class="container custom-container">
      <div class="footer__inner">
        <div class="footer__top">
          <a class="footer__logo" href="/"><img src="{{asset('frontend/static/media/logo-footer.bf964aeb.png')}}" alt=""></a>
          <div class="footer__menu">
            <nav class="footer-nav">
              <div class="footer-nav__list">
                <div class="footer-nav__item">
                  <a
                    class="footer-nav__link link-dark"
                    href="{{route('frontend-about')}}"
                    >{{__('messages.about-tv')}}</a
                  >
                </div>
                 
              </div>
            </nav>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer__copyright">
            <p>
              {{__('messages.copyright')}}
            </p>
          </div>
          <a class="footer__made-by" href="https://dbc.uz"
            ><span class="visually-hidden">Разработка сайта DBC</span>
          </a>
        </div>
      </div>
    </div>
  </footer>
</footer>