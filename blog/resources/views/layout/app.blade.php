<html>

  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  
  <body>
    
    @include('layout.menu')
    @yield('content')
    @yield('script')
  @include('layout.footer')
  
  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  </body>
</html>