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

</head>

<body class="hold-transition box-login">
    <div class="container d-flex justify-content-center" >
        <div class="login-box ">
            <a href="/"><img class= "mb-3" style="width:180px;" src="{{ asset('img/logo-maisyah-white.png') }}" alt=""></a>
            <!-- /.login-logo -->
            <div class="card  shadow-md card-outline card-primary letter-spacing">
                <div class="card-header text-center">
                    <span class="h4  text-signin">Reset kata sandi Anda</span>
                </div>
                <p class="px-4 text-tiny" style="color: rgb(75 85 99/1);">Masukkan alamat email yang terkait dengan akun Anda dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda.</p>
                @if(session()->has('status'))
                <div class="px-4 text-tiny" style="color:rgb(5 150 105/1);">{{ session('status') }}</div>
                @endif
                <form action="/forgot-password" method="post" id="quickForm">
                    @csrf
                    <div class="card-body ">
                        <div class="form-group">
                            <div class="input-group ">
                                <input type="text" class="form-control form-btn @error('email') is-invalid  @enderror" placeholder="Email" name="email" id="email"value="{{ old('email') }}" autocomplete="off">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope icon-green"></span>
                                    </div>
                                </div>
                                @error('email')
                                    <div class="invalid-feedback text-tiny">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <button type="submit" class="swalDefaultSuccess btn btn-login btn-block text-tiny">Kirim</button>
                                </div>                   
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <a href="/login" class="btn btn-block btn-daftar text-tiny">Login</a>
                                </div>                   
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

</body>

</html>