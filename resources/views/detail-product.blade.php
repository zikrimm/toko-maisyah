@extends('layouts.main2')
  @section('section')
      <!-- Product Slides-->
      <div class="product-slides owl-carousel">
        <!-- Single Hero Slide-->
        <div class="single-product-slide">
          <a href="{{asset('storage/'. $product->gambar_detailProduct1)}}" data-lightbox="gambar_detailProduct" data-title="{{ $product->nama_product }}">
            <img style="object-fit: cover; height: 100%;" src="{{asset('storage/'. $product->gambar_detailProduct1)}}" alt="">
          </a>
        </div>
        @if ($product->gambar_detailProduct2 && $product->gambar_detailProduct3)
          <div class="single-product-slide">
            <a href="{{asset('storage/'. $product->gambar_detailProduct2)}}" data-lightbox="gambar_detailProduct" data-title="{{ $product->nama_product }}">
              <img style="object-fit: cover; height: 100%;" src="{{asset('storage/'. $product->gambar_detailProduct2)}}" alt="">
            </a>
          </div>
          <div class="single-product-slide">
            <a href="{{asset('storage/'. $product->gambar_detailProduct3)}}" data-lightbox="gambar_detailProduct" data-title="{{ $product->nama_product }}">
              <img style="object-fit: cover; height: 100%;" src="{{asset('storage/'. $product->gambar_detailProduct3)}}" alt="">
            </a>
          </div>
        @elseif  ($product->gambar_detailProduct2) 
          <div class="single-product-slide">
            <a href="{{asset('storage/'. $product->gambar_detailProduct2) }}" data-lightbox="gambar_detailProduct" data-title="{{ $product->nama_product }}">
              <img style="object-fit: cover; height: 100%;" src="{{asset('storage/'. $product->gambar_detailProduct2) }}" alt="">
            </a>
          </div>
        @endif 
        
      </div>
      <div class="product-description pb-3">
        <!-- Product Title & Meta Data-->
        <div class="product-title-meta-data bg-white mb-3 py-3">
          <div class="container d-flex justify-content-between">
            <div class="p-title-price">
              <h6 class="mb-1">{{ $product->nama_product }}</h6>
              @if ($product->harga_coret_product)
              <p class="sale-price mb-0">{{ $product->harga_product }}<span>{{ $product->harga_coret_product }}</span></p>
              @else
              <p class="sale-price mb-0">{{ $product->harga_product }}</p>
              @endif
            </div>
            <div class="p-wishlist-share"><a href="wishlist-grid.html"><i class="lni lni-heart"></i></a></div>
          </div>
          <!-- Ratings-->
          <div class="product-ratings">
            <div class="container d-flex align-items-center justify-content-between">
              <div class="ratings"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><span class="pl-1">3 ratings</span></div>
              <div class="total-result-of-ratings"><span>5.0</span><span>Sangat Bagus</span></div>
            </div>
          </div>
        </div>
        @if($product->flashsale)
        <!-- Flash Sale Panel-->
        <div class="flash-sale-panel bg-white mb-3 py-3">
          <div class="container">
            <!-- Sales Offer Content-->
            <div class="sales-offer-content d-flex align-items-end justify-content-between">
              <!-- Sales End-->
              <div class="sales-end">
                <p class="mb-1 font-weight-bold"><i class="bi bi-lightning-charge-fill"></i> Flash sale berakhir pada</p>
                <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss-->
                <ul class="sales-end-timer pl-0 d-flex align-items-center" data-countdown="{{ $product->flashsale }}">
                  <li><span class="days">0</span>d</li>
                  <li><span class="hours">0</span>h</li>
                  <li><span class="minutes">0</span>m</li>
                  <li><span class="seconds">0</span>s</li>
                </ul>
              </div>
              <!-- Sales Volume-->
              <div class="sales-volume text-right">
                <p class="mb-1 font-weight-bold">{{ $product->sold_out }}% Sold Out</p>
                <div class="progress" style="height: 6px;">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $product->sold_out }}%;" aria-valuenow="{{ $product->sold_out }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
        <!-- Selection Panel-->
        <div class="selection-panel bg-white mb-3 py-3">
          <div class="container d-flex align-items-center justify-content-between">
            <!-- Choose Color-->
            <div class="choose-color-wrapper">
              <p class="mb-1 font-weight-bold">Color</p>
              <div class="choose-color-radio d-flex align-items-center">
                <!-- Single Radio Input-->
                <div class="form-check mb-0">
                  <input class="form-check-input blue" id="colorRadio1" type="radio" name="colorRadio" checked>
                  <label class="form-check-label" for="colorRadio1"></label>
                </div>
                <!-- Single Radio Input-->
                <div class="form-check mb-0">
                  <input class="form-check-input yellow" id="colorRadio2" type="radio" name="colorRadio">
                  <label class="form-check-label" for="colorRadio2"></label>
                </div>
                <!-- Single Radio Input-->
                <div class="form-check mb-0">
                  <input class="form-check-input green" id="colorRadio3" type="radio" name="colorRadio">
                  <label class="form-check-label" for="colorRadio3"></label>
                </div>
                <!-- Single Radio Input-->
                <div class="form-check mb-0">
                  <input class="form-check-input purple" id="colorRadio4" type="radio" name="colorRadio">
                  <label class="form-check-label" for="colorRadio4"></label>
                </div>
              </div>
            </div>
            <!-- Choose Size-->
            <div class="choose-size-wrapper text-right">
              <p class="mb-1 font-weight-bold">Size</p>
              <div class="choose-size-radio d-flex align-items-center">
                <!-- Single Radio Input-->
                <div class="form-check mb-0 mr-2">
                  <input class="form-check-input" id="sizeRadio1" type="radio" name="sizeRadio">
                  <label class="form-check-label" for="sizeRadio1">S</label>
                </div>
                <!-- Single Radio Input-->
                <div class="form-check mb-0 mr-2">
                  <input class="form-check-input" id="sizeRadio2" type="radio" name="sizeRadio" checked>
                  <label class="form-check-label" for="sizeRadio2">M</label>
                </div>
                <!-- Single Radio Input-->
                <div class="form-check mb-0">
                  <input class="form-check-input" id="sizeRadio3" type="radio" name="sizeRadio">
                  <label class="form-check-label" for="sizeRadio3">L</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Add To Cart-->
        <div class="cart-form-wrapper bg-white mb-3 py-3">
          <div class="container">
            <form class="cart-form" action="/sendProduct" target="_blank" method="POST">
              @csrf
              <input type="hidden" value="{{ $product }}" name="product">
              <div class="order-plus-minus d-flex align-items-center">
                <div class="quantity-button-handler">-</div>
                <input class="form-control cart-quantity-input" type="text" step="1" name="quantity" value="1">
                <div class="quantity-button-handler">+</div>
                <div><span class="pl-3">Tersisa {{ $product->jumlah_product }} buah</span></div>
              </div>
              
              <button class="btn btn-danger ml-3" name="submit" type="submit">Beli</button>
            </form>
          </div>
        </div>
        <!-- Product Specification-->
        <div class="p-specification bg-white mb-3 py-3">
          <div class="container">
            <h6>Deskripsi</h6>
            {!! $product->deskripsi_product !!}
          </div>
        </div>
        <!-- Related Products Slides-->
        <div class="related-product-wrapper bg-white py-3 mb-3">
          <div class="container">
            <div class="section-heading d-flex align-items-center justify-content-between">
              <h6>Related Products</h6><a class="btn p-0" href="/product">View All</a>
            </div>
            <div class="related-product-slide flash-sale-slide owl-carousel" >   
             
              @foreach($products as $product)
              @php
                $harga_product = 'Rp'. number_format($product->harga_product,0,'','.');
                $harga_coret_product = 'Rp'. number_format($product->harga_coret_product,0,'','.')
              @endphp
              <div class="card bg-gray top-product-card shadow-none">
                <div class="card-body">
                  <!-- Badge-->
                  @if ($product->info_product == "Sale")
                  <span class="badge badge-success">{{ $product->info_product }}</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                  @elseif ($product->info_product == "Hot")
                  <span class="badge badge-warning">{{ $product->info_product }}</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                  @elseif ($product->info_product == "New")
                  <span class="badge badge-primary">{{ $product->info_product }}</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                  @else 
                  <span class="badge badge-danger">PROMO</span><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                  @endif
                  <!-- Thumbnail -->
                  <a class="product-thumbnail d-block" href="/product/{{ $product->slug }}">
                    <img class="mb-2 " style="height: 150px; object-fit: cover"  src="{{asset('storage/'. $product->gambar_product)}}" alt="" />
                  </a>
                  <!-- Product Title -->
                  <a class="product-title d-block text-truncate" style="font-size:16px;" href="/product/{{ $product->slug }}">{{ $product->nama_product }}
                  <!-- Product Price -->
                  @if ($product->harga_coret_product)
                  <p class="sale-price  text-truncate " >{{ $harga_product }}<span>{{ $harga_coret_product }}</span></p>
                  @else 
                  <p class="text-truncate"  style="color:white; margin-bottom:.5rem;">{{ $harga_product }}</p>
                  @endif
                  <!-- Rating -->
                  <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                  <!-- Add to Cart -->
                  <a class="btn btn-success btn-sm d-flex justify-content-center align-items-center " href="/product/{{ $product->slug }}">
                    <i class="fa-solid fa-plus"></i>
                  </a>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <!-- Rating & Review Wrapper-->
        <div class="rating-and-review-wrapper bg-white py-3 mb-3">
          <div class="container">
            <h6>Ulasan</h6>
            <div class="rating-review-content">
              <ul class="pl-0">
                <li class="single-user-review d-flex">
                  <div class="user-thumbnail"><img src="{{ asset('img/avatar.png') }}" alt=""></div>
                  <div class="rating-comment">
                    <div class="rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                    <p class="comment mb-0">Produknya bagus</p><span class="name-date">Dikirim pada 3 April 2022</span>
                  </div>
                </li>
                <li class="single-user-review d-flex">
                  <div class="user-thumbnail"><img src="{{ asset('img/avatar4.png') }}" alt=""></div>
                  <div class="rating-comment">
                    <div class="rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                    <p class="comment mb-0">Best banget sihh</p><span class="name-date">Dikirim pada 2 Januari 2022</span>
                  </div>
                </li>
                <li class="single-user-review d-flex">
                  <div class="user-thumbnail"><img src="{{ asset('img/avatar5.png') }}" alt=""></div>
                  <div class="rating-comment">
                    <div class="rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                    <p class="comment mb-0">Banyakin lagi dong stocknya kak</p><span class="name-date">Dikirim pada 27 Februari 2022</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="ratings-submit-form bg-white py-3">
          <div class="container">
            <h6>Tanya Terkait Product</h6>
            <form action="/tanyaProduct" method="post">
              @csrf
              <textarea class="form-control mb-3" id="comments" name="pertanyaan" cols="30" rows="10" data-max-length="200" placeholder="Tuliskan pesan kamu.."></textarea>
              <button class="btn btn-sm btn-primary" type="submit">Kirim</button>
            </form>
          </div>
        </div>
        <!-- Ratings Submit Form-->
        {{-- <div class="ratings-submit-form bg-white py-3">
          <div class="container">
            <h6>Submit A Review</h6>
            <form action="#" method="">
              <div class="stars mb-3">
                <input class="star-1" type="radio" name="star" id="star1">
                <label class="star-1" for="star1"></label>
                <input class="star-2" type="radio" name="star" id="star2">
                <label class="star-2" for="star2"></label>
                <input class="star-3" type="radio" name="star" id="star3">
                <label class="star-3" for="star3"></label>
                <input class="star-4" type="radio" name="star" id="star4">
                <label class="star-4" for="star4"></label>
                <input class="star-5" type="radio" name="star" id="star5">
                <label class="star-5" for="star5"></label><span></span>
              </div>
              <textarea class="form-control mb-3" id="comments" name="comment" cols="30" rows="10" data-max-length="200" placeholder="Write your review..."></textarea>
              <button class="btn btn-sm btn-primary" type="submit">Save Review</button>
            </form>
          </div>
        </div> --}}
      </div>
      <a href="#tes" class="to-top">
        <i class="bi bi-arrow-up-short"></i>
      </a>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>

@endsection
@push('scripts')
<script>
  lightbox.option({
      'maxHeight': 700
  });

</script>
@endpush