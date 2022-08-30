@extends('dashboard.layouts.main')
@section('content')
<div class="container-fluid">
    <div class="content-header">
        <h1 class="m-0">Profile</h1>
    </div>
</div>

<section class="content">
    <div class="container-fluid box-profile mb-3">
        <div class="content-header border-header-profile" style="width:100% !important;">
            <h5 class="m-0 h5-profile ">Perbarui Profil Kamu</h5>
            <p class="text-grey pt-1">Lengkapilah profil kamu, agar lebih mudah dalam bertransaksi di Maisyah Corporation</p>
        </div>
        <livewire:dashboard-profile>
    </div>
</section>
@endsection
