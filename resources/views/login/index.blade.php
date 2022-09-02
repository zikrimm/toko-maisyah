<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maisyah Corporation: Log in</title>
    <!-- Icon Website -->
    <link rel="icon" href="{{ asset('img/logo-ldua.png') }}">

    <!-- Google Font: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet"
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <!-- MY CSS -->
    <link rel="stylesheet" href="{{ asset('css/style-login.css') }}">
    
    {{-- Sweet Alert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="hold-transition box-login">
    <div class="container d-flex justify-content-center">
        
        <div class="login-box">
            <a href="/">
                <img class= "mb-3" id="logo-dark" style="width:180px;" src="{{ asset('img/logo-maisyah-white.png') }}" alt="">
            </a>
            <!-- /.login-logo -->
            <div class="card card-outline shadow-md card-primary letter-spacing">
                <div class="card-header text-center">
                    <span class="h4 text-signin">Sign in to your account</span>
                </div>
                <form action="/login" method="post" id="quickForm">
                    @csrf
                    <div class="card-body ">
                        <div class="form-group">
                            @if( session()->has('status') )
                            <div class="alert alert-success alert-dismissible fade show text-tiny" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            @endif
                            @if( session()->has('success') )
                            <div class="alert alert-success alert-dismissible fade show text-tiny" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            @endif
                            @if( session()->has('loginError') )
                            <div class="alert alert-danger alert-dismissible fade show text-tiny" role="alert">
                                Email / Password salah!
                                <button type="button" class="close ubah-warna-alert" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            @if( session()->has('loginGoogleError') )
                            <div class="alert alert-danger alert-dismissible fade show text-tiny" role="alert">
                                {{ session('loginGoogleError') }}
                                <button type="button" class="close ubah-warna-alert" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div class="input-group ">
                                <input type="text" class="form-control input-email form-btn @error('email') is-invalid  @enderror" placeholder="Email" name="email" id="email" required value="{{ old('email') }}" autocomplete="off">
                                <div class="input-group-append " >
                                    <div class="input-group-text badge-email" >
                                        <span class="fas fa-user icon-green"></span>
                                    </div>
                                </div>
                            </div>
                            @error('email')
                                <div class="invalid-feedback text-tiny">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group  ">
                                <input type="password" class="form-control input-password form-btn" autocomplete="off" placeholder="Password" name="password" required id="password">
                                <div class="input-group-append">
                                    <div class="input-group-text badge-password">
                                        <span class="fas fa-lock icon-green"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="width:100%;">
                            <div class="col">
                                <div class="form-check mb-3">
                                    <input type="checkbox" name="remember_me" value="1" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label text-tiny" for="exampleCheck1">Remember me</label>
                                </div>
                            </div>
                            <div class="col-me-auto" >
                                <a href="/forgot-password" class="link-underline text-tiny"  >Forgot Password</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button  class="swalDefaultSuccess btn btn-login btn-block text-tiny">Login</button>
                            </div>                   
                        </div>
                        <div class="row mt-2">
                            <div class="col ">
                                <div class="social-log">
                                    <span class="text-tiny">
                                        atau login dengan 
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <a href="{{ '/auth/redirect/login'}}"  class="btn shadow-sm text-tiny  btn-block btn-social-log">
                                    <img src="img/google.png" width="30" alt="">
                                     Login with Google
                                </a>
                            </div>                           
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <p class="text-center text-tiny">Belum punya akun?</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/register" class="btn btn-block btn-daftar text-tiny">Daftar</a>
                            </div>                   
                        </div>
                    </div>
                <!-- /.card-body -->
                </form>
            </div>
        </div>
        <!-- /.card -->
            
</div>

    {{-- sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jquery-validation -->
    <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    {{-- Dark Theme --}}
    <script src="{{ asset('js/default/dark-mode-switch.js') }}"></script>
    <script>
        let logoDark = document.querySelector("#logo-dark");
        if (localStorage.getItem('theme') == "dark") { 
          
          logoDark.setAttribute('src','{{ asset('img/logo-maisyah-dark.png') }}');
        } 
        if (localStorage.getItem('theme') == "light") { 
          logoDark.setAttribute('src','{{ asset('img/logo-maisyah-white.png') }}');
        }
  </script>
  <script>
    $('.input-email').on("blur",function(){
        $('.badge-email').removeClass('border-blue');
    })
    $('.input-email').on("focus",function(){
        $('.badge-email').addClass('border-blue');
    })
    $('.input-password').on("blur",function(){
        $('.badge-password').removeClass('border-blue');
    })
    $('.input-password').on("focus",function(){
        $('.badge-password').addClass('border-blue');
    })
  </script>

</body>

</html>