@extends('layouts.main2')
@section('section')
<!-- Sidenav Black Overlay-->
      <!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
          <livewire:product-index></livewire:product-index>     
        </div>
      </div>
      <a href="#tes" class="to-top">
        <i class="fa-solid fa-arrow-up"></i>
      </a>

    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    
@endsection