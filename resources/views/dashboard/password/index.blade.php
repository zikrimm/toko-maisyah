@extends('dashboard.layouts.main')
@section('content')
<div class="container-fluid">
    <div class="content-header">
        <h1 class="m-0">Password</h1>
    </div>
</div>

<section class="content">
    <div class="container-fluid box-profile mb-3">
        <div class="content-header border-header-profile" style="width:100% !important;">
            <h5 class="m-0 h5-profile ">Ganti kata sandi</h5>
            <p class="text-grey pt-1">Jangan beritahukan siapa pun password Anda</p>
        </div>
        <livewire:dashboard-password>
    </div>
</section>
@endsection
