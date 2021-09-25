@include('admin.template.header')
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="front-end/#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="front-end/index3.html" class="nav-link"></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="front-end/#" class="nav-link"></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <p class="nav-link">Xin chào  @if (Auth::guard('nhanvien')->user()->q_id == 1)
          {{ Auth::guard('nhanvien')->user()->nv_ten }} <b style="color: red">(admin)</b>
          @else
            {{ Auth::guard('nhanvien')->user()->nv_ten }}
          @endif</p>
        {{-- <p>{{ \Auth::guard('nhanvien')->user() }}</p> --}}
        {{-- <p>{{ \Auth::guard('nhanvien')->user() }}</p> --}}
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dangxuat') }}">
          Đăng xuất
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  {{-- sidebar --}}
  @include('admin.template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  