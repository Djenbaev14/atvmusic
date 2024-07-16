<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="utf-8" />
     
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,shrink-to-fit=no"
    />
    <meta name="theme-color" content="#000000" />

    <link rel="manifest" href="manifest.json" />
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png" />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="apple-icon-114x114.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="120x120"
      href="apple-icon-120x120.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="apple-icon-144x144.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="apple-icon-152x152.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="apple-icon-180x180.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="android-icon-192x192.png"
    />
    <link rel="icon" type="image/png" sizes="32x32" href="  -32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="  -96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="  -16x16.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <base />
    <title>AmudaryoTV Telekanali</title>
    <link href="{{asset('frontend/static/css/8.48ff51b6.chunk.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/static/css/main.31800ec9.chunk.css')}}" rel="stylesheet" />

    <meta charset="utf-8" />
     
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,shrink-to-fit=no"
    />
    <meta name="theme-color" content="#000000" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"
    />
    <link rel="manifest" href="/manifest.json" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png" />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="/apple-icon-114x114.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="120x120"
      href="/apple-icon-120x120.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="/apple-icon-144x144.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="/apple-icon-152x152.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/apple-icon-180x180.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="/android-icon-192x192.png"
    />
    <link rel="icon" type="image/png" sizes="32x32" href="/  -32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="/  -96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/  -16x16.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <base href="/" />
    <title>AmudaryoTV Telekanali</title>
    <link href="{{asset('frontend/static/css/8.48ff51b6.chunk.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/static/css/main.31800ec9.chunk.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/static/css/index.css')}}" rel="stylesheet" />

    <link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet">
    <script src="https://vjs.zencdn.net/7.14.3/video.js"></script>
    @stack('css')
  </head>
  <body>
    <div class="wrapper">
      <div class="outer-wrapper">
        {{-- header --}}
        @include('frontend.components.header')
        <div class="wrapper">
          <main>
            
            @yield('main-content')
            {{-- home --}}
          </main>
        </div>
        {{-- footer --}}
        @include('frontend.components.footer')
      </div>
    </div>

    @stack('js')
    
  </body>
</html>
