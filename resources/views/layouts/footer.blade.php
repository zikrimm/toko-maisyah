    <!-- Footer Nav-->
    <footer class="py-5 mt-5 mb-5 container-fluid bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4 col-md-12 mr-5">
            <a href="#"><img id="logo-dark2" src="{{ asset('img/logo-maisyah-white.png') }}" width="200" alt=""></a>
            <h5 class="mt-4">Maisyah Corporation</h5>
            <p class="p-footer">Kampus A Universitas Negeri Jakarta</p>
            <p class=" p-footer">Jalan Rawamangun Muka Jakarta</p>
            <p class=" p-footer">13220</p>
            <h5 class="mt-3">Layanan 24 Jam</h5>
            <p class="p-footer">Phone: 0895330038078</p>
            <p class="p-footer  pt-1">WA: 0895330038078</p>
            <p class="p-footer  pt-1">Email: mua.unj@gmail.com</p>

          </div>
          <div class="col-lg-2 col-md-4 mt-3 ">
            <h5 class="mb-3">Category</h5>
            <p class="p-footer2"> <a href="/category/{{ $categories[4]->slug}}">Makanan & Minuman</a></p>
            <p class="p-footer2"> <a href="/category/{{ $categories[1]->slug}}">Buku</a></p>
            <p class="p-footer2"> <a href="/category/{{ $categories[8]->slug}}">Totebag</a></p>
            <p class="p-footer2"> <a href="/category/{{ $categories[2]->slug}}">Fashion Muslim</a></p>
            <p class="p-footer2"> <a href="/category/{{ $categories[5]->slug}}">Pakaian Pria</a></p>
            <p class="p-footer2"> <a href="/category/{{ $categories[0]->slug}}">Aksesoris Muslimah</a></p>
            <p class="p-footer2"> <a href="/category/{{ $categories[3]->slug}}">Herbal</a></p>
            <p class="p-footer2"> <a href="/category/{{ $categories[6]->slug}}">Perawatan dan Kecantikan</a></p>
            <p class="p-footer2"> <a href="/category/{{ $categories[7]->slug}}">Pulsa</a></p>
            <p class="p-footer2"> <a href="/category/{{ $categories[9]->slug}}">Lain-lain</a></p>
          </div>
          <div class="col-lg-2 col-md-4   mt-3">
            <h5 class="mb-3">Information</h5>
            <p class="p-footer2"><a href="#">Tentang Kami</a></p>
            <p class="p-footer2"><a href="#">Kontak Kami</a></p>
            <p class="p-footer2"><a href="#">Blog</a></p>
            <p class="p-footer2"><a href="#">Terms Of Service</a></p>
          </div>
          <div class="col-lg-3 col-md-4   mt-3">
            <h5 class="mb-3">Social</h5>  
            <p class="p-footer2"><a href="https://www.facebook.com/ululalbaab.unj" target="_blank"><i class="bi bi-facebook mr-1"></i>Facebook</a></p>
            <p class="p-footer2"><a href="https://www.instagram.com/maisyah_ululalbaab/" target="_blank"><i class="bi bi-instagram mr-1"></i>Instagram</a></p>
            <p class="p-footer2"><a href="https://www.youtube.com/channel/UC9PqwhkXDm2-ysVJFg1DKhA" target="_blank"><i class="bi bi-youtube mr-1"></i>Youtube</a></p>
            <p class="p-footer2"><a href="https://twitter.com/ululalbaab_unj" target="_blank"><i class="bi bi-twitter mr-1"></i>Twitter</a></p>
          </div>
          {{-- <div class="col-lg-3 ">
            <h5 class="mb-3">Pembayaran</h5>
            <p class="p-footer2">Metode Pembayaran</p>
            <p class="p-footer2">Konfirmasi Pembayaran</p>
            <p class="p-footer2">Penawaran Kerjasama</p>
            <p class="p-footer2">Promo</p>
          </div> --}}
        </div>
        <div class="row">
          <div class="col-12 mt-3">
            <div class="line"></div>
          </div>
          <div class="col-md-6 mt-3">
            Hak Cipta &copy; 2022 Maisyah Corporation
          </div>
        </div>
      </div>
    </footer>

    <div class="footer-nav-area" id="footerNav">
        <div class="container h-100 px-0">
          <div class="suha-footer-nav h-100">
            <ul class="h-100 d-flex align-items-center justify-content-between pl-0">
              <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/"><i class="lni lni-home"></i>Home</a></li>
              <li class="{{ Request::is('/cart') ? 'active' : '' }}"><a href="/"><i class="lni lni-life-ring"></i>Support</a></li>
              <li class="{{ Request::is('product*') ? 'active' : '' }}"><a href="/product"><i class="lni lni-shopping-basket"></i>Product</a></li>
              <li class="{{ Request::is('/message') ? 'active' : '' }}"><a href="/"><i class="lni lni-heart"></i>Pages</a></li>
              <li class="{{ Request::is('settings') ? 'active' : '' }}"><a href="/settings"><i class="lni lni-cog"></i>Settings</a></li>
            </ul>
          </div>
        </div>
      </div>