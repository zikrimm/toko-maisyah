@extends('layouts.main2')
@section('section')

<!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
          {{-- FlashSale Banner --}}
          @if($flashsale->status == "Active" && $flashsale->banner_flashsale)
            <div class="">
              <img class="rounded" src="{{ asset('storage/'. $flashsale->banner_flashsale) }}" alt="">
            </div>
          @endif
          <livewire:flashsale-index :flashsale_time="$flashsale_time">
        </div>
      </div>
      <a href="#tes" class="to-top">
        <i class="fa-solid fa-arrow-up"></i>
      </a>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    @endsection