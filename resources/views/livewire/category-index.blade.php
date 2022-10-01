<div>
    <div class="mt-3">   
        <div class="section-heading d-flex justify-content-end">
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
          <div class="mr-1">
            <select wire:model="FilterProducts" class="form-select form-select-sm">
              <option value="DataAlphabet">Alphabet</option>
              <option value="DataUlasan">Ulasan</option>
              <option value="DataTerbaru" selected>Terbaru</option>
              <option value="DataTerlaris">Terlaris</option>
              <option value="DataMurahkeMahal">Harga: Murah ke Mahal</option>
              <option value="DataMahalkeMurah">Harga: Mahal ke Murah</option>
            </select>
          </div>
          <div>
            <select wire:model="paginationGrid" class="form-select form-select-sm" name="" id="">
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
          <div class="mr-1">
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
            <select wire:model="paginationList" class="form-select form-select-sm " name="" id="">
              <option value="6">6</option>
              <option value="20">20</option>
              <option value="30">30</option>
            </select>
          </div>
          @endif
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
            <!-- Single Top Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card card-hover top-product-card">
                <div class="card-body">
                  @if ($product->info_product == "Sale")
                  <span class="badge badge-success">{{ $product->info_product }}</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                  @elseif ($product->info_product == "Hot")
                  <span class="badge badge-warning">{{ $product->info_product }}</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                  @elseif ($product->info_product == "New")
                  <span class="badge badge-primary">{{ $product->info_product }}</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                  @else 
                  <span class="badge badge-danger">PROMO</span>
                  <a class="wishlist-btn" href="#">
                    <i class="lni lni-heart"></i>
                  </a>
                  @endif
                  <a class="product-thumbnail d-block" href="/product/{{ $product->slug }}">
                    <img class="mb-2" style="height: 158px; object-fit: contain" src="{{ asset('storage/'. $product->gambar_product) }}" alt=""></a><a class="product-title d-block" href="/product/{{ $product->slug }}">{{ $product->nama_product }}</a>
                  @if ($product->harga_coret_product)
                  <p class="sale-price">{{ $harga_product }}
                    <span>{{ $harga_coret_product }}</span>
                  </p>
                  @else
                  <p class="sale-price">{{ $harga_product }}
                  </p>
                  @endif
                  <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><a class="btn btn-success btn-sm " href="/product/{{ $product->slug }}"><i class="fa-solid fa-plus"></i></a>
                </div>
              </div>
            </div>
            @endforeach   
           </div>
           <div class="d-flex justify-content-center mt-5">
            {{ $products->onEachSide(2)->links() }}
          </div>
        </div>
         @else
         <div wire:loading.class="loading-text mt-4">
           <h5 class="text-center" wire:loading.remove>Product tidak ditemukan</h5>
         </div>
         @endif
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
                <span class="badge badge-success">{{ $product->info_product }}</span>
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
                <div class="product-rating"><i class="fa-solid fa-star"></i>4.88 (39)</div><a class="btn btn-success btn-sm " href="/product/{{ $product->slug }}"><i class="mr-1 lni lni-cart"></i>Buy Now</a>
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
    <div wire:loading.class="loading-text mt-4">
      <h5 class="text-center" wire:loading.remove>Product tidak ditemukan</h5>
    </div>
    @endif
  @endif
  </div>
</div>