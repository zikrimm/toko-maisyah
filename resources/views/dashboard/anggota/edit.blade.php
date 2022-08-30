@extends('dashboard.layouts.main')
@section('content')
<!-- Main content -->
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Data</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard/posts">Daftar Postingan</a></li>
                    <li class="breadcrumb-item active">Edit Data</li>

                </ol>
            </div>

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Post BEMP STATISTIKA UNJ</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="/dashboard/anggota/{{ $member->id }}">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror " id="nama_lengkap" name="nama_lengkap" autocomplete="off"  placeholder="Masukkan Nama Lengkap" value="{{ old('nama_lengkap', $member->nama_lengkap) }}">
                                @error('nama_lengkap')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nim">Nim</label>
                                <input type="text" autocomplete="off" class="form-control @error('nim') is-invalid @enderror" id="nim"  name="nim" placeholder="Masukkan Nim" value="{{ old('nim', $member->nim) }}">
                                @error('nim')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="angkatan">Angkatan</label>
                                <select class="custom-select rounded-2" id="angkatan" name="angkatan">                           
                                    <option value="2020" {{ old('angkatan',$member->angkatan) == 2020? 'selected': '' }}>2020</option>
                                    <option value="2021" {{ old('angkatan', $member->angkatan) == 2021? 'selected': '' }}>2021</option>                                    
                                </select>
                                @error('angkatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="departemen">Departemen</label>
                                <select class="custom-select rounded-2" id="departemen" name="departemen">
                                    <option value="Ketua" {{ old('departemen', $member->departemen) == "Ketua"? 'selected': '' }}>Ketua</option>
                                    <option value="Sekretaris" {{ old('departemen', $member->departemen) == "Sekretaris"? 'selected': '' }}>Sekretaris</option>
                                    <option value="Bendahara" {{ old('departemen', $member->departemen) == "Bendahara"? 'selected': '' }}>Bendahara</option>
                                    <option value="Kaderisasi" {{ old('departemen', $member->departemen) == "Kaderisasi"? 'selected': '' }}>Kaderisasi</option>
                                    <option value="Advokasi" {{ old('departemen', $member->departemen) == "Advokasi"? 'selected': '' }}>Advokasi</option>
                                    <option value="Rohis" {{ old('departemen', $member->departemen) == "Rohis"? 'selected': '' }}>Rohis</option>
                                    <option value="Entrepeneur" {{ old('departemen', $member->departemen) == "Entrapeneur"? 'selected': '' }}>Entrepeneur</option>
                                    <option value="Humasi" {{ old('departemen', $member->departemen) == "Humasi"? 'selected': '' }}>Humasi</option>
                                </select>
                                @error('departemen')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"  name="email" placeholder="Masukkan email" value="{{ old('email', $member->email) }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-3">Edit Anggota</button>
                            <a href="/dashboard/anggota"><button type="button" class="btn btn-primary">Kembali</button></a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<!-- /.content -->


@endsection
