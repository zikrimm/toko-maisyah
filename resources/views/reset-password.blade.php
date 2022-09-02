<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maisyah Corporation: Reset Kata Sandi</title>
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
    <script src="sweetalert2.all.min.js"></script>
</head>

<body class="hold-transition box-login">
    <div class="container d-flex justify-content-center">
   
        <div class="login-box letter-spacing">
            <a href="/"><img class= "mb-3" style="width:150px;" id="logo-dark" src="{{ asset('img/logo-maisyah-white.png') }}" alt=""></a>
            <!-- /.login-logo -->
            <div class="card shadow-md card-outline card-primary letter-spacing">
                <div class="card-header text-center">
                    <span class="h4 fw-3">Reset Password</span>
                </div>
                <p class="px-4 text-tiny" style="margin-bottom: 0;" style="color: rgb(75 85 99/1);">Silakan masukkan kata sandi Anda dengan karakter yang sulit ditebak.</p>
                <form action="/reset-password" method="post" id="registerForm">
                    @csrf
                    <div class="card-body ">
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <label for="email" class="text-weight-500 text-tiny">Email</label>
                            <input type="email" readonly class="form-control  @error('email') is-invalid  @enderror" id="email" value="{{ old('email',$email) }}" name="email">
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

                        <div class="row">
                            <div class="col">
                                <button type="submit" class="swalDefaultSuccess btn btn-login btn-block text-tiny">Kirim</button>
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