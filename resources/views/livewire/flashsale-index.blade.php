<div>
    <div class="section-heading d-flex align-items-center mt-3 justify-content-between">
        <div class="flash-sale-index d-flex ">       
          <h4 class="ml-1 flashsale h4-flashsale-index">F<i class="bi bi-lightning-charge-fill"></i>ASH SALE</h4>
          <ul wire:ignore class="countdown_flash_sale pl-3 d-flex align-items-center mr-auto" data-countdown="{{ $flashsale_time }}">
            <li>
              <span class="days">0</span>
            </li>
            <span>:</span>
            <li>
              <span class="hours"> 0</span>
            </li>
            <span>:</span> 
            <li>
              <span class="minutes"> 0</span>
            </li>
            <span>:</span>
            <li>
              <span class="seconds"> 0</span> 
            </li>
          </ul>
        </div>
        <div class="d-flex">
        @if($showProductGrid)
          <div class="layout-options">
            <a wire:click="showProductGrid" class="active" href="#">
              <i class="lni lni-grid-alt"></i>
            </a>
          </div>
          <div class="layout-options mr-2" >
            <a wire:click="showProductList">
              <i class="lni lni-radio-button"></i>
            </a>
          </div>
          <div class="mr-1 filter-products">
            <select wire:model="FilterProducts" class="form-select  form-select-sm">
              <option value="DataAlphabet">Alphabet</option>
              <option value="DataUlasan">Ulasan</option>
              <option value="DataTerbaru" selected>Terbaru</option>
              <option value="DataTerlaris">Terlaris</option>
              <option value="DataMurahkeMahal">Harga: Murah ke Mahal</option>
              <option value="DataMahalkeMurah">Harga: Mahal ke Murah</option>
            </select>
          </div>
          <div>
            <select wire:model="paginationGrid" class="form-select pagination-grid form-select-sm" name="" id="">
              <option value="8">8</option>
              <option value="20">20</option>
              <option value="32">32</option>
            </select>
          </div>
          
          @else
          <div class="layout-options">
            <a wire:click="showProductGrid"  href="#">
              <i class="lni lni-grid-alt"></i>
            </a>
          </div>
          <div class="layout-options mr-2 " >
            <a wire:click="showProductList" class="active">
              <i class="lni lni-radio-button"></i>
            </a>
          </div>
          <div class="mr-1 filter-products">
            <select wire:model="FilterProducts"  class="form-select form-select-sm" name="" id="">
              <option value="DataAlphabet">Alphabet</option>
              <option value="DataUlasan">Ulasan</option>
              <option selected value="DataTerbaru">Terbaru</option>
              <option value="DataTerlaris">Terlaris</option>
              <option value="DataMurahkeMahal">Harga: Murah ke Mahal</option>
              <option value="DataMahalkeMurah">Harga: Mahal ke Murah</option>
            </select>
          </div>
          <div>
            <select wire:model="paginationList" class="form-select pagination-grid form-select-sm " name="" id="">
              <option value="6">6</option>
              <option value="20">20</option>
              <option value="30">30</option>
            </select>
          </div>
          @endif
        </div>
    </div>

    {{-- Searching --}}
    <div class="mb-3 searching d-flex justify-content-between">
      <div class="ml-1">
        @if($search)
        <p  style="font-weight: 500;">Hasil Pencarian <span class="font-weight-bold result-search" >"{{ $search }}"</span></p>
        @endif
      </div>
      <div class="top-search-form">
        <form action="#">
          <input wire:model="search" class="form-control"  type="text" name="search" placeholder="Cari Produk..." />
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    {{-- Grid Product --}}
    @if($showProductGrid)
      @if($products->count())
      <div class="table-product" wire:loading.class="loading">
        <div class="row g-3">
          @foreach ($products as $product)
          @php
          $harga_product = 'Rp'. number_format($product->harga_product,0,'','.');
          $harga_coret_product = 'Rp'. number_format($product->harga_coret_product,0,'','.')
          @endphp
          @if($product->flashsale)
          <!-- Single Flash Sale Card-->
          <div class="col-6 col-md-4 col-lg-3">
            <div class="card card-hover flash-sale-card" style="height:290px;">             
              <div class="card-body">
                <span class="badge badge-warning">FLASH SALE</span>
                <a class="wishlist-btn" href="#">
                    <i class="lni lni-heart"></i>
                  </a>
                <a href="/product/{{ $product->slug }}">
                  <div style="height:180px;">
                    <img style="height: 160px; width:100%; object-fit: contain" src="{{ asset('storage/'.$product->gambar_product) }}" alt="">
                  </div>
                  <span class="product-title">{{ $product->nama_product }}</span>
                  <p class="sale-price color-price-flash text-truncate">{{ $harga_product }}
                    <span class="real-price color-coret-flash">{{ $harga_coret_product }}</span>
                  </p>
                  <span class="progress-title">{{ $product->sold_out }}% Sold Out</span>
                  <span class="progress-title-fire-2"></span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          @endif
          @endforeach
          <div class="d-flex justify-content-center mt-5">
            {{ $products->onEachSide(2)->links() }}
          </div>
           @else
           <div wire:loading.class="loading-text">
             <h5 class="text-center" wire:loading.remove>Product tidak ditemukan</h5>
           </div>
           @endif
        </div>
      </div>
      @endif
      {{-- List Product --}}
      @if($showProductList)
      @if($products->count())
      <div class="table-product" wire:loading.class="loading">
        <div class="row g-3">
          <!-- Single Weekly Product Card-->
          @foreach ($products as $product)
          @php
          $harga_product = 'Rp'. number_format($product->harga_product,0,'','.');
          $harga_coret_product = 'Rp'. number_format($product->harga_coret_product,0,'','.')
          @endphp
          <div class="col-12 col-md-6">
            <div class="card card-hover weekly-product-card">
              <div class="card-body d-flex align-items-center">
                <div class="product-thumbnail-side">
                  <span class="badge badge-warning">FLASH SALE</span>
                  <a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                  <a class="product-thumbnail d-block" href="/product/{{ $product->slug }}">
                    <img style="height: 158px; object-fit:contain" src="{{ asset('storage/'. $product->gambar_product) }}" alt="">
                  </a>
                </div>
                <div class="product-description">
                  <a class="product-title d-block" href="/product/{{ $product->slug }}">{{ $product->nama_product }}</a>
                  <p class="sale-price font-weight-bold">
                    @if($product->harga_coret_product)
                    <i class="lni lni-dollar"></i>
                    {{ $harga_product }}
                    <span>{{ $harga_coret_product }}</span>
                    @else
                    <i class="lni lni-dollar"></i>
                    {{ $harga_product }}
                    @endif
                  </p>
                  <div class="product-rating">
                    <i class="fa-solid fa-star"></i>
                    4.88 (39 review)
                  </div>
                  
                  <span class="progress-title">{{ $product->sold_out }}% Sold Out</span>
                  <span class="progress-title-fire-3"></span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <a class="btn btn-success btn-sm mt-3" href="/product/{{ $product->slug }}">
                    <i class="mr-1 lni lni-cart"></i>Beli Sekarang
                  </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      {{-- Pagination --}}
      <div class="d-flex justify-content-center mt-5">
        {{ $products->onEachSide(2)->links() }}
      </div>
      @else
      <div wire:loading.class="loading-text">
        <h5 class="text-center" wire:loading.remove >Product tidak ditemukan</h5>
      </div>
      @endif
    @endif
</div>
