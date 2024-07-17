<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AmudaryoTV Telekanali</title>
    <link rel="icon" href="{{asset('src/images/logo/logo.png')}}" />
    <link rel="stylesheet" href="{{asset('src/styles/styles.css')}}" />
    <link rel="stylesheet" href="{{asset('src/styles/responsive.css')}}" />
    @stack('css')
  </head>
  <body>
    @include('frontend.components.header')

    @yield('main-content')
    @include('frontend.components.footer')

    <!-- ================================================ -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @stack('js')
    <!-- FontAwesome JS -->
    <script
      src="https://kit.fontawesome.com/32ee8f9848.js"
      crossorigin="anonymous"
    ></script>
    <script src="{{asset('src/js/app.js')}}"></script>
  </body>
</html>
