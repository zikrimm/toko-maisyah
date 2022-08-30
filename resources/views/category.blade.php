@extends('layouts.main2')
@section('section')
  <!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
          <!-- Catagory Single Image-->
          @if($category_banner != NULL)  
            <div class="">
              <img class="rounded" src="{{ asset('storage/'. $category_banner) }}" alt="">
            </div>
          @endif
          <livewire:category-index :category="$category">
        </div>
      </div>
      <a href="#tes" class="to-top">
        <i class="bi bi-arrow-up-short"></i>
      </a>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
@endsection