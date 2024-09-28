<!-- Preloader -->
{{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ url('fontend/img/Laravel.png')}}" alt="Logo" height="60" width="60">
</div> --}}

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" target="_blank" class="brand-link">
      {{-- <i class=" img-circle elevation-3 fas fa-tachometer-alt"  style="opacity: .8"></i> --}}
      <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <i class="fa fa-globe" style="margin-left: 19px"></i>
      <span class="brand-text font-weight-light" style="margin-left: 5px">Visite Site</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('admin/dashboard') }}" class="nav-link @if (Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/home') }}" class="nav-link @if (Request::segment(2) == 'home') active @endif">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/about') }}" class="nav-link @if (Request::segment(2) == 'about') active @endif">
              <i class="nav-icon fa fa-info-circle"></i>
              <p>
                About
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/quality') }}" class="nav-link @if (Request::segment(2) == 'quality') active @endif">
              <i class="nav-icon fa fa-certificate"></i>
              <p>
                Quality
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/experience') }}" class="nav-link @if (Request::segment(2) == 'experience') active @endif">
              <i class="nav-icon fa fa-history"></i>
              <p>
                Experience
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/skill') }}" class="nav-link @if (Request::segment(2) == 'skill') active @endif">
              <i class="nav-icon fa fa-cogs"></i>
              <p>
                Skill
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/service') }}" class="nav-link @if (Request::segment(2) == 'service') active @endif">
              <i class="nav-icon fa fa-wrench"></i>
              <p>
                Service
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/portfolio') }}" class="nav-link @if (Request::segment(2) == 'portfolio') active @endif">
              <i class="nav-icon fa fa-briefcase"></i>
              <p>
                Portfolio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/review') }}" class="nav-link @if (Request::segment(2) == 'review') active @endif">
              <i class="nav-icon fa fa-star checked"></i>
              <p>
                Reviews
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/blog') }}" class="nav-link @if (Request::segment(2) == 'blog') active @endif">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Blogs
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/contact') }}" class="nav-link @if (Request::segment(2) == 'contact') active @endif">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Contact
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link">
              <i class="nav-icon fa fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>