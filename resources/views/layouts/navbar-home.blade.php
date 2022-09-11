<!-- Header Area-->
<div class="header-area" id="headerArea">
    <div class="container h-100 d-flex align-items-center justify-content-between">
      <!-- Logo Wrapper-->
      <div class="logo-wrapper">
        <a href="#" class="text-dark font-weight-bold logo-dark"><img id="logo-dark" src="img/logo-maisyah-white.png" width="150" alt=""></a>
      </div>
      <!-- Search Form-->
      <div class="top-search-form">
        <form action="/product" method="">
          <input class="form-control" type="search" name="search" placeholder="Enter your keyword" />
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      @auth
      <div class="dropdown" id="dropbtn1">
        <button class="dropbtn font-weight-light"  id="dropbtn"  onclick="dropdownFunction()">
          <div class="d-block align-items-center item text-truncate">
            {{ auth()->user()->name }}
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" class="svg-dropdown h-3.5 w-3.5 transition-transform duration-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="6 9 12 15 18 9"></polyline>
          </svg>
        </button>
        <div class="dropdown-content" id="myDropdown">
          <a href="/dashboard" id="text-dashboard">
            <i class="fas fa-tachometer-alt"></i>
            Dashboard
          </a>
          <a href="/dashboard/profile" id="text-dashboard">
            <i class="fas fa-user"></i>
            Profile
          </a>
          <a href="/settings" id="text-dashboard">
            <i class="fas fa-cog"></i>
            Settings
          </a>
          <div class="hr">

          </div>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item">  
              <i class="fas fa-sign-out-alt"></i>     
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
      @auth
      @can('admin')
        @if(auth()->user()->foto)
          <div class="user-profile"><img src="{{ asset(auth()->user()->foto) }}" alt=""/></div>
        @else
          <div class="user-profile"><img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt=""/></div>
        @endif
      @else
        @if(auth()->user()->foto)
        <div class="user-profile"><img src="{{ asset(auth()->user()->foto) }}" alt=""/></div>
        @else
        <div class="user-profile"><img src="{{ asset('img/user3.png') }}" alt=""/></div>
        @endif
      @endcan
      @else
      <div class="user-profile"><img src="{{ asset("img/bg-img/avatar-1.svg") }}" alt="" /></div>
      @endauth
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
        <a href="/dashboard/profile"><i class="lni lni-user"></i>My Profile</a>
      </li>
      <li>
        <a href="/dashboard"><i class="lni lni-dashboard"></i>Dashboard</a>
      </li>
      <li class="suha-dropdown-menu">
        <a href="#"><i class="lni lni-grid-alt"></i>Kategori</a>
        <ul>
          <li><a href="category/{{ $categories[0]->slug}}">- Aksesoris Muslimah</a></li>
          <li><a href="category/{{ $categories[1]->slug}}">- Buku</a></li>
          <li><a href="category/{{ $categories[2]->slug}}">- Fashion Muslim</a></li>
          <li><a href="category/{{ $categories[3]->slug}}">- Herbal</a></li>
          <li><a href="category/{{ $categories[4]->slug}}">- Makanan & Minuman</a></li>
          <li><a href="category/{{ $categories[5]->slug}}">- Pakaian Pria</a></li>
          <li><a href="category/{{ $categories[6]->slug}}">- Perawatan dan Kecantikan</a></li>
          <li><a href="category/{{ $categories[7]->slug}}">- Pulsa</a></li>
          <li><a href="category/{{ $categories[8]->slug}}">- Totebag</a></li>
          <li><a href="category/{{ $categories[9]->slug}}">- Lain-lain</a></li>
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
          <li><a href="category/{{ $categories[0]->slug}}">- Aksesoris Muslimah</a></li>
          <li><a href="category/{{ $categories[1]->slug}}">- Buku</a></li>
          <li><a href="category/{{ $categories[2]->slug}}">- Fashion Muslim</a></li>
          <li><a href="category/{{ $categories[3]->slug}}">- Herbal</a></li>
          <li><a href="category/{{ $categories[4]->slug}}">- Makanan & Minuman</a></li>
          <li><a href="category/{{ $categories[5]->slug}}">- Pakaian Pria</a></li>
          <li><a href="category/{{ $categories[6]->slug}}">- Perawatan dan Kecantikan</a></li>
          <li><a href="category/{{ $categories[7]->slug}}">- Pulsa</a></li>
          <li><a href="category/{{ $categories[8]->slug}}">- Totebag</a></li>
          <li><a href="category/{{ $categories[9]->slug}}">- Lain-lain</a></li>
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
        <a href="/login"><i class="lni lni-power-switch"></i>Login</a>
      </li>
      @endauth
      
    </ul>
    <!-- Go Back Button-->
    <div class="go-home-btn" id="goHomeBtn"><i class="fa-solid fa-arrow-left-long"></i></div>
  </div>

 