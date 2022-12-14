<!-- Header Area-->
<div class="header-area" style="height:50px;" id="headerArea">
    <div class="container h-100 d-flex align-items-center justify-content-between">
     <!-- Back Button-->
     <div class="back-button"><a href="{{ url()->previous() }}"><i class="lni lni-arrow-left"></i></a></div>
     <!-- Page Title-->
     <div class="page-heading">
       @if(Request::is(['product','product-list']))
       <h6 class="mb-0">All Products</h6>
       @elseif (Request::is(['category*']))
       <h6 class="mb-0">{{ $category_name }}</h6>
       @elseif (Request::is(['flash-sale*']))
       <h6 class="mb-0">Flash Sale</h6>
       @else
       <h6 class="mb-0">Detail Product</h6>
       @endif
     </div>
      @auth
      <div class="dropdown" id="dropbtn1">
        <button class="dropbtn font-weight-light " id="dropbtn"  onclick="dropdownFunction()">
          Maisyah Corporation
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" id="myDropdown">
          <a href="/dashboard" id="text-dashboard">Dashboard</a>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item">       
              Logout
            </button>
          </form>
        </div>
      </div> 
      @else
        <div class="navbar-login">
          <a href="/login" class="text-dark" id="navbar-login">Login</a>
        </div>
      @endauth

      
      <!-- Navbar Toggler-->
      <div class="suha-navbar-toggler d-flex flex-wrap" id="suhaNavbarToggler"><span></span><span></span><span></span></div>
    </div>
  </div>
  <!-- Sidenav Black Overlay-->
  <div class="sidenav-black-overlay"></div>
  <!-- Side Nav Wrapper-->
  <div class="suha-sidenav-wrapper" id="sidenavWrapper">
    <!-- Sidenav Profile-->
    <div class="sidenav-profile">
      <div class="user-profile"><img src="{{ asset("img/bg-img/avatar-1.svg") }}" alt="" /></div>
      <div class="user-info">
        @auth
        <h6 class="user-name mb-0">{{ auth()->user()->name}}</h6>
        @else
        <h6 class="user-name mb-0">Anonym</h6>
        @endauth
      </div>
    </div>
    <!-- Sidenav Nav-->
    <ul class="sidenav-nav pl-0">
      @auth
      <li>
        <a href="profile.html"><i class="lni lni-user"></i>My Profile</a>
      </li>
      <li>
        <a href="/dashboard"><i class="lni lni-dashboard"></i>Dashboard</a>
      </li>
      <li class="suha-dropdown-menu">
        <a href="#"><i class="lni lni-grid-alt"></i>Kategori</a>
        <ul>
          <li><a href="category/{{ $categories[0]->nama_kategori}}">- Makanan</a></li>
          <li><a href="category/{{ $categories[1]->nama_kategori}}">- Minuman</a></li>
          <li><a href="category/{{ $categories[2]->nama_kategori}}">- Fashion</a></li>
          <li><a href="category/{{ $categories[3]->nama_kategori}}">- Aksesoris Muslimah</a></li>
          <li><a href="category/{{ $categories[4]->nama_kategori}}">- Herbal</a></li>
          <li><a href="category/{{ $categories[5]->nama_kategori}}">- Lain-lain</a></li>
        </ul>
      </li>
      <li>
        <a href="/product"><i class="lni lni-cart"></i>Semua Produk</a>
      </li> 
      <li>
        <a href="/flash-sale"><i class="lni lni-tag"></i>Flash Sale</a>
      </li> 
      <li>
        <a href="/settings"><i class="lni lni-cog"></i>Settings</a>
      </li>
      <li>
        <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn-sidebar font-weight-bold " >       
          <i class="lni lni-power-switch"></i>Logout
        </button>
        </form>
      </li>
      @else
      <li class="suha-dropdown-menu">
        <a href="#"><i class="lni lni-grid-alt"></i>Kategori</a>
        <ul>
          <li><a href="category/{{ $categories[0]->nama_kategori}}">- Makanan</a></li>
          <li><a href="category/{{ $categories[1]->nama_kategori}}">- Minuman</a></li>
          <li><a href="category/{{ $categories[2]->nama_kategori}}">- Fashion</a></li>
          <li><a href="category/{{ $categories[3]->nama_kategori}}">- Aksesoris Muslimah</a></li>
          <li><a href="category/{{ $categories[4]->nama_kategori}}">- Herbal</a></li>
          <li><a href="category/{{ $categories[5]->nama_kategori}}">- Lain-lain</a></li>
        </ul>
      </li>
      <li>
        <a href="/product"><i class="lni lni-cart"></i>Semua Produk</a>
      </li> 
      <li>
        <a href="/flash-sale"><i class="lni lni-tag"></i>Flash Sale</a>
      </li> 
      <li>
        <a href="/settings"><i class="lni lni-cog"></i>Settings</a>
      </li>
      <li>
        <a href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
      </li>
      @endauth
      
    </ul>
    <!-- Go Back Button-->
    <div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-left"></i></div>
  </div>

 