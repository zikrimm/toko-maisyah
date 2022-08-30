<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maisyah Corporation</title>
  {{-- CSRF Token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Icon Website -->
  <link rel="icon" href="{{ asset('img/logo-ldua.png') }}">

  {{-- Trix Editor --}}
  <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script>

  {{-- DataTables --}}
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

  {{-- Preloader Spinner --}}
  <link rel="stylesheet" href="{{ asset('css/spinner.css') }}">

  {{-- SweetAlert2 --}}
  <script src="{{ asset('dist/sweetalert2.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('dist/sweetalert2.min.css') }}">
  <style>
    trix-toolbar [data-trix-button-group = "file-tools"]{
      display:none;
    }
  </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Google Font: Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
  {{-- ToasTR --}}
  <link rel="stylesheet" href="{{ asset('/css/toastr.min.css') }}">
  <!--Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
  <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
  <!-- MY CSS -->
  <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/dashboard-products.css') }}">
  @livewireStyles

</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
    <div class="wrapper">
        @yield('preloader')
        @include('dashboard.layouts.header')
        @include('dashboard.layouts.sidebar')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('dashboard.layouts.footer')
    </div>
  <!-- jQuery -->
 
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
  <!-- ChartJS -->
  <script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
  {{-- ToasTR --}}
  <script src="{{ asset('js/toastr.min.js') }}"></script>
  <!-- JQVMap -->
  <script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <!-- Summernote -->
  <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  {{-- Custom File Input --}}
  <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
  {{-- Jquery Form --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
  {{-- DataTables --}}
  {{-- <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  @stack('scripts')
  <script>
    let darkmode = document.getElementById('darkmode');
    let iconmoon = darkmode.querySelector('.fas')
    let navbar = document.getElementsByClassName('main-header')[0];
    let logout = document.getElementById('panellogout');
    let logoDashboard = document.getElementsByClassName('image-dashboard')[0];
    $(function () {
    bsCustomFileInput.init();
    });
    if (localStorage.getItem('is-dark')) { 
      document.body.classList.add('dark-mode');
      iconmoon.classList.add('fa-sun');
      iconmoon.classList.remove('fa-moon');
      navbar.classList.add('navbar-dark');
      navbar.classList.remove('navbar-light');
      logout.classList.add('modedark');
      if(logoDashboard != null){
        logoDashboard.setAttribute('src','img/logo-maisyah-dark.png');
      }
    }
    darkmode.addEventListener('click', () => {
      if (document.body.classList.contains('dark-mode')) {
        iconmoon.classList.add('fa-moon');
        iconmoon.classList.remove('fa-sun');
        localStorage.removeItem('is-dark');
      } else {
        iconmoon.classList.add('fa-sun');
        iconmoon.classList.remove('fa-moon');
        localStorage.setItem('is-dark', 1);
       
      }

      if (navbar.classList.contains('navbar-light')) {
        navbar.classList.add('navbar-dark');
        navbar.classList.remove('navbar-light');
        
        
      } else {
        navbar.classList.remove('navbar-dark');
        navbar.classList.add('navbar-light');
      }
      document.body.classList.toggle('dark-mode');
      logout.classList.toggle('modedark');
    })
  </script>
  <script>
    window.addEventListener('toastr:info',event =>{
      var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      });

      Toast.fire({
        icon: 'success',
        title: 'Data berhasil diupdate!'
      })
    });
  </script>
  @livewireScripts
</body>
</html>
