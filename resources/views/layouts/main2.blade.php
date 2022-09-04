<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#100DD1" />

    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags-->
    <!-- Title-->
    <title>Maisyah Corporation</title>
    <!-- Favicon-->
    <link rel="icon" sizes="32x32" href="{{ asset("img/logo-ldua.png") }}" />
    {{-- Font Awesome V6 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="{{ asset("img/icons/icon-96x96.png") }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset("img/icons/icon-152x152.png") }}" />
    <link rel="apple-touch-icon" sizes="167x167" href="{{ asset("img/icons/icon-167x167.png") }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("img/icons/icon-180x180.png") }}" />
    <!-- Stylesheet-->
    <link rel="stylesheet" href="{{asset("/css/style-home.css") }}" />
    {{-- Owl Carousel --}}
    <link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
    {{-- Preloader CSS --}}
    <link rel="stylesheet" href="{{ asset("/css/preloader.css") }}">
    {{-- FONT --}}
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    {{-- <!-- Web App Manifest-->
    <link rel="manifest" href="manifest.json" /> --}}
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    @livewireStyles
  
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
    @if (Request::is(['settings','/']))
      @include("layouts.navbar-home")
    @elseif (Request::is(['product*','category*','flash-sale*']))
      @include("layouts.navbar-products")
    @endif
    <div class="page-content-wrapper" id="tes">
    @yield('section')
    @include("layouts.footer")
    </div>
    <!-- All JavaScript Files-->
    <script src="{{ asset("js/jquery-3.6.0.min.js") }}"></script>
    <script src="{{ asset("js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("js/myscript.js") }}"></script>
    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("js/waypoints.min.js") }}"></script>
    <script src="{{ asset("js/jquery.easing.min.js") }}"></script>
    <script src="{{ asset("js/jquery.counterup.min.js") }}"></script>
    <script src="{{ asset("js/jquery.countdown.min.js") }}"></script>
    <script src="{{ asset("js/wow.min.js") }}"></script>
    <script src="{{ asset("js/jarallax.min.js") }}"></script>
    <script src="{{ asset("js/jarallax-video.min.js") }}"></script>
    <script src="{{ asset("js/default/dark-mode-switch.js") }}"></script>
    <script src="{{ asset("js/default/active.js") }}"></script>
    <script src="{{ asset("js/pwa.js") }}"></script>
    <script src="https://kit.fontawesome.com/471d5e1a86.js" crossorigin="anonymous"></script>
    @stack('scripts')
    @if(Request::is(['settings','/']))
    <script>
      let logoDark = document.querySelector("#logo-dark");
      let logoDark2 = document.querySelector("#logo-dark2");
      let darkSwitch = document.querySelector('.r');
      if (localStorage.getItem('theme') == "dark") { 
        
        logoDark.setAttribute('src','{{ asset('img/logo-maisyah-dark.png') }}');
        logoDark2.setAttribute('src','{{ asset('img/logo-maisyah-dark.png') }}');
      } 
      if (localStorage.getItem('theme') == "light") { 
        logoDark.setAttribute('src','img/logo-maisyah-white.png');
        logoDark2.setAttribute('src','img/logo-maisyah-white.png');
      }
    </script>
    @endif
 <script>
      let logoDark3 = document.querySelector("#logo-dark");
      let logoDark4 = document.querySelector("#logo-dark2");
      if (localStorage.getItem('theme') == "dark") { 
        
        logoDark4.setAttribute('src','{{ asset('img/logo-maisyah-dark.png') }}');
      } 
      if (localStorage.getItem('theme') == "light") { 
        logoDark4.setAttribute('src','{{ asset('img/logo-maisyah-white.png') }}');
      }

      
</script>
  <script>
      function dropdownFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      } 
  </script>
  @livewireScripts
  </body>
</html>