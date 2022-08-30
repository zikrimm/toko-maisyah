 <!-- Main Sidebar Container -->
 <aside id="panellogout" class="  main-sidebar  sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
      {{-- <img src="{{ asset('img/mais2.png') }}" alt="BEMP STATISTIKA Logo" class="brand-image img-circle elevation-6"> --}}
      <span class="brand-text font-weight-light font-weight-bold">Maisyah Corporation</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-1  d-flex">
        <div class="image">
          @can('admin')
          @if(auth()->user()->foto)
          <img src="{{ asset(auth()->user()->foto) }}" class="img-circle elevation-2" alt="User Image">
          @else
          <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" class="img-circle elevation-2" alt="User Image">
          @endif
          @else
          @if(auth()->user()->foto)
          <img src="{{ asset(auth()->user()->foto) }}" class="img-circle elevation-2" alt="User Image">
          @else
          <img src="{{ asset('img/user3.png') }}" class="img-circle elevation-2" alt="User Image">
          @endif
          @endcan
        </div>
        
        <div class="info">
          <a href="#" class=" d-block">{{ auth()->user()->name }}</a>
          @can('admin')
          <p class="text-gray">Administrator</p>
          @else
          <p class="text-gray">Member</p>
          @endcan
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-flat nav-legacy flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          @can('admin')
          {{-- Admin Panel --}}
          <li class="nav-item ">
            <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Halaman Admin
              </p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a href="/dashboard/anggota" class="nav-link {{ Request::is('dashboard/anggota*') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-book "></i>
              <p>
                Daftar Anggota
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-alt "></i>
              <p>
                Kelola Posts
              </p>
            </a>
          </li>       

          <li class="nav-item {{ Request::is('dashboard/products','dashboard/categories','dashboard/flashsale','dashboard/banner') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              <p>Kelola Toko
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard/products" class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-box-open"></i>
                  <p>
                    Product
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboard/categories" class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-th-large"></i>
                  <p>
                    Category
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboard/flashsale" class="nav-link {{ Request::is('dashboard/flashsale*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tags"></i>
                  <p>
                    Flash Sale
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dashboard/banner" class="nav-link {{ Request::is('dashboard/banner*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>
                    Banner
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item ">
            <a href="/dashboard/user" class="nav-link {{ Request::is('dashboard/user*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user "></i>
              <p>
                Kelola User
              </p>
            </a>
          </li>     
          {{-- End Admin Panel --}}
          @endcan

          <li class="nav-item ">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
               Kembali ke Website
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>