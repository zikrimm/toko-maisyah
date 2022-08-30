@extends('layouts.main2')
@section('section')

      <!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">All Products</h6>
            <!-- Layout Options-->
            <div class="layout-options"><a  href="product"><i class="lni lni-grid-alt"></i></a><a class="active" href="#"><i class="lni lni-radio-button"></i></a></div>
          </div>
           <!-- Search Form-->
           <div class="mb-3 d-flex justify-content-end">
            <div class="top-search-form">
              <form action="/product-list" method="">
                <input class="form-control" value="{{ request('cari') }}" type="search" name="cari" placeholder="Cari Produk..." />
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
           </div>
           @if($products->count())
          <div class="row g-3">
            <!-- Single Weekly Product Card-->
            @foreach ($products as $product)
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side">
                    <span class="badge badge-success">{{ $product->info_product }}</span>
                    <a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                    <a class="product-thumbnail d-block" href="/product/{{ $product->slug }}">
                      <img style="height: 158px; object-fit:cover" src="{{ asset('storage/'. $product->gambar_product) }}" alt="">
                    </a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="/product/{{ $product->slug }}">{{ $product->nama_product }}</a>
                    <p class="sale-price font-weight-bold">
                      <i class="lni lni-dollar"></i>{{ $product->harga_product }}<span>{{ $product->harga_coret_product }}</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.88 (39)</div><a class="btn btn-success btn-sm " href="/product/{{ $product->nama_product }}"><i class="mr-1 lni lni-cart"></i>Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="d-flex justify-content-center mt-5">
            {{ $products->onEachSide(2)->links() }}
            </div>
          @else
          <h5 class="text-center">Product tidak ditemukan</h5>
          @endif
        </div>
      </div>
      <a href="#tes" class="to-top">
        <i class="bi bi-arrow-up-short"></i>
      </a>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
@endsection