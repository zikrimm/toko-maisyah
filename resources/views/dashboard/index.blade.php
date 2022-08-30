@section('preloader')
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake image-dashboard" src="{{ asset('img/logo-maisyah-white.png') }}" alt="BEMP STATISTIKA" height="180" width="380">
</div>
@endsection
@extends('dashboard.layouts.main')
@section('content')

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm">
          @can('admin')
          <h1 class="m-0">Halaman Admin</h1>
          @else
          <h1 class="m-0">Halaman Utama</h1>
          @endcan
        </div>
      </div>  
    </div>
  </div>
 
  <!-- Main content -->
<section class="content">
    <div class="container-fluid">
    @can('admin')
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $members->count() }}</h3>
            <p>Jumlah Anggota</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="/dashboard/anggota" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $products->count() }}</h3>
            <p>Jumlah Product</p>
          </div>
          <div class="icon">
            <i class="ion ion-home"></i>
          </div>
          <a href="dashboard/products" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3 class="h4-responsive-juta">Rp. 3.000.000</h3>

            <p>Total keuangan</p>
          </div>
          <div class="icon">
            <i class="ion ion-cash"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    @endcan
    <!-- /.row -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class=" pt-3 alert alert-primary" role="alert">
            <h5 class="h5-responsive-index ">Selamat Datang <span class="teks">{{ auth()->user()->name }}!</span> </h5>
              <h5 class="h5-responsive-index ">Kini kamu berada di dalam Dashboard Maisyah Corporation, Silahkan lengkapi Profil kamu <a href="dashboard/profile">disini</a></h5>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
