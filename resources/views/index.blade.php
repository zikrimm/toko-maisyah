@extends('layouts.main2')
@section('section')

      <!-- Hero Slides-->
      <div class="hero-slides owl-carousel">
      @foreach($banners as $banner)
        <!-- Single Hero Slide-->
        <div class="single-hero-slide banner-image  mt-3" >
         <img style="object-fit: cover; " class="rounded " src="{{ asset('storage/' . $banner->banner_utama) }}" alt="">
         <div class="slide-content h-100 d-flex align-items-center">
         </div>
        </div>
      @endforeach
      </div>
      
      <!-- Product Catagories-->
      <div class="product-catagories-wrapper owl-box-shadow py-3">
        <div class="container">
          <div class="section-heading">
            <h6 class="ml-1">Product Category</h6>
          </div>
          <div class="product-catagory-wrap owl-carousel owl-theme">
            <div class="row g-3">
              <!-- Single Catagory Card-->
              <div class="col-md-3 col-4 item">
                <div class="card catagory-card">
                  <div class="card-body d-flex align-items-center">
                    <a href="category/{{ $categories[4]->slug}}"><img class="icon-kategori" src="img/fast-food.png" alt=""><span class="mt-2">Makanan & Minuman</span></a>
                  </div>
                </div>
              </div>
              <!-- Single Catagory Card-->
              <div class="col-md-3 col-4 item">
                <div class="card catagory-card">
                  <div class="card-body d-flex align-items-center">
                    <a href="category/{{ $categories[1]->slug}}"><img class="icon-kategori" src="img/book3.png" alt=""><span class="mt-2">Buku</span></a>
                  </div>
                </div>
              </div>
              <!-- Single Catagory Card-->
              <div class="col-md-3 col-4 item">
                <div class="card catagory-card">
                  <div class="card-body d-flex align-items-center">
                    <a href="category/{{ $categories[8]->slug}}"><img class="icon-kategori" src="img/totebag.png" alt=""><span class="mt-2">Totebag</span></a>
                  </div>
                </div>
              </div>
              <!-- Single Catagory Card-->
              <div class="col-md-3 col-4 item">
                <div class="card catagory-card">
                  <div class="card-body d-flex align-items-center">
                    <a href="category/{{ $categories[2]->slug}}"><img class="icon-kategori" src="img/fashion2.png" alt=""><span class="mt-2">Fashion Muslim</span></a>
                  </div>
                </div>
              </div>
              <!-- Single Catagory Card-->
              <div class="col-md-3 col-4 item">
                <div class="card catagory-card">
                  <div class="card-body d-flex align-items-center">
                    <a href="category/{{ $categories[5]->slug}}"><img class="icon-kategori" src="img/pakaian-pria2.png" alt=""><span class="mt-2">Pakaian Pria</span></a>
                  </div>
                </div>
              </div>
              <!-- Single Catagory Card-->
              <div class="col-md-3 col-4 item">
                <div class="card catagory-card">
                  <div class="card-body">
                    <a href="category/{{ $categories[0]->slug}}"><img class="icon-kategori" src="img/jilbab2.png" alt=""><span class="mt-2">Aksesoris Muslimah</span></a>
                  </div>
                </div>
              </div>
              <!-- Single Catagory Card-->
              <div class="col-md-3 col-4 item">
                <div class="card catagory-card">
                  <div class="card-body d-flex align-items-center">
                    <a href="category/{{ $categories[3]->slug}}"><img class="icon-kategori" src="img/herbal.png" alt=""><span class="mt-2">Herbal</span></a>
                  </div>
                </div>
              </div>
              <!-- Single Catagory Card-->
              <div class="col-md-3 col-4 item">
                <div class="card catagory-card">
                  <div class="card-body d-flex align-items-center">
                    <a href="category/{{ $categories[6]->slug}}"><img class="icon-kategori" src="img/skincare.png" alt=""><span class="mt-2">Perawatan dan Kecantikan</span></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row g-3 ml-1">
              <!-- Single Catagory Card-->
              <div class="col-md-3 col-4 item">
                <div class="card catagory-card">
                  <div class="card-body d-flex align-items-center">
                    <a href="category/{{ $categories[7]->slug}}"><img class="icon-kategori" src="img/handphone.png" alt=""><span class="mt-2">Pulsa</span></a>
                  </div>
                </div>  
              </div>
              <!-- Single Catagory Card-->
              <div class="col-md-3 col-4 item">
                <div class="card catagory-card">
                  <div class="card-body ">
                    <a href="category/{{ $categories[9]->slug}}"><i class="lni lni-grid-alt"></i><span>Lain-lain</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
         <!-- Cool Facts Area-->
        <div class="cta-area" > 
          <div class="container">
            @if($flashsale[0]->status == "Active" && $flashsale[0]->banner_flashsale)
            <div class="">
              <img class="rounded" src="{{ asset('storage/'. $flashsale[0]->banner_flashsale) }}" alt="">
            </div>
            @endif
            {{-- <div class="cta-text p-4 p-lg-5" style="background-image: url(img/ProductDetail.jpg)"> --}}
            {{-- <h4>Flash Sale Until 90% Off</h4>
            <p>Special Ramadhan <br />Promo Hingga 90% Semua Produk</p>
            <a class="btn btn-danger" href="/flash-sale">Lihat Product</a> --}}
           {{-- </div> --}}
          </div>
        </div>
      <!-- Flash Sale Slide-->
      @if($flashsale[0]->status == "Active")
      <div class="flash-sale-wrapper py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center">
            <h4 class="ml-1 flashsale">F<i class="bi bi-lightning-charge-fill"></i>ASH SALE</h4>
            <ul class="countdown_flash_sale pl-3 d-flex align-items-center mr-auto" data-countdown="{{ $flashsale[0]->time }}">
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
            <a class="btn btn-danger btn-sm " href="/flash-sale">View All</a>
          </div>

          <!-- Flash Sale Slide-->
          <div class="flash-sale-slide owl-box-shadow owl-carousel">
            @foreach($products as $product)
            @php
            $harga_product = 'Rp'. number_format($product->harga_product,0,'','.');
            $harga_coret_product = 'Rp'. number_format($product->harga_coret_product,0,'','.')
            @endphp
            @if($product->flashsale)
            <!-- Single Flash Sale Card-->
            <div class="card card-hover  flash-sale-card">
              <div class="card-body">
                <span class="badge badge-warning">FLASH SALE</span>
                <a class="wishlist-btn" href="#"></a>
                <a href="/product/{{ $product->slug }} ">
                  <img style="object-fit: cover; width: 500px; " src="{{ asset('storage/'.  $product->gambar_product) }}" alt="" />
                  <span class="product-title">{{ $product->nama_product }}</span>
                  <p class="sale-price flash-harga text-truncate">{{ $harga_product }}
                    <span class="real-price flash-coret">{{ $harga_coret_product }}</span>
                  </p>
                  <span class="progress-title" style="font-size: 11px !important;">{{ $product->sold_out }}% Sold Out</span>
                  <!-- Progress Bar-->
                  <span class="progress-title-fire"></span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{ $product->sold_out }}%" aria-valuenow="{{ $product->sold_out }}" aria-valuemin="0" aria-valuemax="100"></div></div
                ></a>
              </div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
      </div>
      @endif
      <!-- Dark Mode -->
      <div class="container mb-2" style="margin-top: -25px;">
        <div class="dark-mode-wrapper mt-3 bg-img p-4 p-lg-5">
          <p class="text-white">You can change your display to a dark background using a dark mode.</p>
          <div class="form-check form-switch mb-0">
            <label class="form-check-label text-white h6 mb-0" for="darkSwitch">Switch to Dark Mode</label>
            <input class="form-check-input" id="darkSwitch" type="checkbox" role="switch">
          </div>
        </div>
      </div>
      <!-- All Products-->
      <div class="top-products-area clearfix py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">All Products</h6>
            <a class="btn btn-success btn-sm" href="product">View All</a>
          </div>
          <div class="row g-3">
            @foreach ($products as $product)     
            @php
            $harga_product = 'Rp'. number_format($product->harga_product,0,'','.');
            $harga_coret_product = 'Rp'. number_format($product->harga_coret_product,0,'','.')
            @endphp
            <!-- Single All Product Card-->
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
                  <span class="badge badge-danger">PROMO</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                  @endif
                  <a class="product-thumbnail d-block" href="/product/{{ $product->slug }}">
                    <img class="mb-2 " style="height: 150px; object-fit: cover"  src="{{asset('storage/'. $product->gambar_product)}}" alt="" />
                  </a>
                  <a class="product-title d-block text-truncate" href="/product/{{ $product->slug }}">{{ $product->nama_product }}
                  </a>
                  @if ($product->harga_coret_product)
                  <p class="sale-price text-truncate ">{{ $harga_product }}<span>{{ $harga_coret_product }}</span></p>
                  @else 
                  <p class="sale-price text-truncate">{{ $harga_product }}</p>
                  @endif
                  <div class="product-rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                  <a class="btn btn-success btn-sm " href="/product/{{ $product->slug }}"><i class="lni lni-plus"></i></a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>

      <!-- Weekly Best Sellers-->
      {{-- <div class="weekly-best-seller-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="pl-1">Weekly Best Sellers</h6>
            <a class="btn btn-success btn-sm" href="shop-list.html">View All</a>
          </div>
          <div class="row g-3">
            <!-- Single Weekly Product Card-->
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side">
                    <span class="badge badge-success">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/10.png" alt="" /></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="single-product.html">Modern Red Sofa</a>
                    <p class="sale-price"><i class="lni lni-dollar"></i>$64<span>$89</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.88 (39)</div>
                    <a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="mr-1 lni lni-cart"></i>Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Weekly Product Card-->
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side">
                    <span class="badge badge-primary">Sale</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/7.png" alt="" /></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="single-product.html">Office Chair</a>
                    <p class="sale-price"><i class="lni lni-dollar"></i>$100<span>$160</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.82 (125)</div>
                    <a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="mr-1 lni lni-cart"></i>Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Weekly Product Card-->
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side">
                    <span class="badge badge-danger">-10%</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/12.png" alt="" /></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="single-product.html">Sun Glasses</a>
                    <p class="sale-price"><i class="lni lni-dollar"></i>$24<span>$32</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.79 (63)</div>
                    <a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="mr-1 lni lni-cart"></i>Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Weekly Product Card-->
            <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side">
                    <span class="badge badge-warning">New</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/13.png" alt="" /></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="single-product.html">Wall Clock</a>
                    <p class="sale-price"><i class="lni lni-dollar"></i>$31<span>$47</span></p>
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.99 (7)</div>
                    <a class="btn btn-success btn-sm add2cart-notify" href="#"><i class="mr-1 lni lni-cart"></i>Buy Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- Discount Coupon Card-->
      {{-- <div class="container">
        <div class="card discount-coupon-card border-0">
          <div class="card-body">
            <div class="coupon-text-wrap d-flex align-items-center p-3">
              <h5 class="text-white pr-3 mb-0">
                Get 20% <br />
                discount
              </h5>
              <p class="text-white pl-3 mb-0">To get discount, enter the<strong class="px-1">GET20</strong>code on the checkout page.</p>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- Featured Products Wrapper-->
      {{-- <div class="featured-products-wrapper py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="pl-1">Featured Products</h6>
            <a class="btn btn-warning btn-sm" href="featured-products.html">View All</a>
          </div>
          <div class="row g-3">
            <!-- Featured Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card featured-product-card">
                <div class="card-body">
                  <span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                  <div class="product-thumbnail-side">
                    <a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/14.png" alt="" /></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="single-product.html">Blue Skateboard</a>
                    <p class="sale-price">$64<span>$89</span></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Featured Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card featured-product-card">
                <div class="card-body">
                  <span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                  <div class="product-thumbnail-side">
                    <a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/15.png" alt="" /></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="single-product.html">Travel Bag</a>
                    <p class="sale-price">$64<span>$89</span></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Featured Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card featured-product-card">
                <div class="card-body">
                  <span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                  <div class="product-thumbnail-side">
                    <a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/16.png" alt="" /></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="single-product.html">Cotton T-shirts</a>
                    <p class="sale-price">$64<span>$89</span></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Featured Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card featured-product-card">
                <div class="card-body">
                  <span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                  <div class="product-thumbnail-side">
                    <a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a><a class="product-thumbnail d-block" href="single-product.html"><img src="img/product/6.png" alt="" /></a>
                  </div>
                  <div class="product-description">
                    <a class="product-title d-block" href="single-product.html">Roof Lamp </a>
                    <p class="sale-price">$64<span>$89</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}} 
      <a href="#tes" class="to-top">
        <i class="bi bi-arrow-up-short"></i>
      </a>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
@endsection  
@push('scripts')
<script>
  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      items:1,
    })
  });
</script>
@endpush