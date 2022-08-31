<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maisyah Corporation: Register</title>
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
        <div class="login-box ">
            <a href="/">
                <img class= "mb-3 mt-3" style="width:150px;" src="{{ asset('img/logo-maisyah-white.png') }}" alt="">
            </a>
            <!-- /.login-logo -->
            <div class="card mb-3 card-outline shadow-md card-primary letter-spacing">
                <div class="card-header text-center">
                    <span class="h4 fw-3">Sign up for an account</span>
                </div>
                <form action="/register" method="post" id="registerForm">
                    @csrf
                    <div class="card-body ">
                        @if( session()->has('registerGoggleError') )
                            <div class="alert alert-danger alert-dismissible fade show text-tiny" role="alert">
                                {{ session('registerGoggleError') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                        @endif
                        <div class="form-group">
                            <label for="name" class="text-weight-500 text-tiny">Nama Lengkap</label>
                            <input type="text" class="form-control  @error('name') is-invalid  @enderror" id="name" value="{{ old('name') }}" name="name">
                            @error('name')
                            <div class="invalid-feedback text-tiny">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-weight-500 text-tiny">Email</label>
                            <input type="email" class="form-control  @error('email') is-invalid  @enderror" id="email" value="{{ old('email') }}" name="email">
                            @error('email')
                            <div class="invalid-feedback text-tiny">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-weight-500 text-tiny">Password</label>
                            <input type="password" autocomplete="off" class="form-control  @error('password') is-invalid  @enderror" id="password" name="password">
                            @error('password')
                            <div class="invalid-feedback text-tiny">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="text-weight-500 text-tiny">Confirm Password</label>
                            <input type="password" autocomplete="off" class="form-control  @error('password_confirmation') is-invalid  @enderror" id="password_confirmation" name="password_confirmation">
                            @error('password_confirmation')
                            <div class="invalid-feedback text-tiny">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row" style="width:100%;">
                            <div class="col">
                                <div class="form-check mb-3">
                                    <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label text-tiny" for="exampleCheck1">I aggree with <a href="#" class="link-underline">Terms Of Service</a></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="swalDefaultSuccess btn btn-login btn-block text-tiny">Daftar</button>
                            </div>                   
                        </div>
                        <div class="row mt-2">
                            <div class="col ">
                                <div class="social-log">
                                    <span class="text-tiny">
                                        atau daftar dengan 
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <a href="{{ '/auth/redirect/register'}}"  class="btn shadow-sm text-tiny  btn-block btn-social-log">
                                    <img src="img/google.png" width="30" alt="">
                                     Register with Google
                                </a>
                            </div>                           
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <p class="text-center text-tiny">Sudah punya akun?</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/login" class="btn btn-block btn-daftar text-tiny">Login</a>
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


    @if(session()->has('success'))
    <script>
        Swal.fire({
            title: 'Pendaftaran Berhasil',
            text: 'Silahkan Login',
            icon: 'success',
        }).then(function(){
            window.location.href = "/login";
        })
    </script>
    @endif

</body>

</html>