 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('trangchu') }}" class="brand-link">
      <img src="{{asset('front-end')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Trang chủ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('front-end')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if (Auth::guard('nhanvien')->user()->q_id == 1)
            {{ Auth::guard('nhanvien')->user()->nv_ten }} <b style="color: red">(admin)</b>
            @else
              {{ Auth::guard('nhanvien')->user()->nv_ten }}
            @endif
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      
      <!-- /.sidebar-menu -->
      @if (Auth::guard('nhanvien')->user()->q_id == 1)
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          {{-- Cái sidebar sửa ở đây là được --}}
          <li class="nav-item ">
            <a href="{{ route('admin') }}" class="nav-link  {{ Request::path() == 'admin' ? 'active' : '' }}">
              <i class="nav-icon fa fa-tachometer"></i>
              <p>
                Bảng điều khiển
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('khachhang') }}" class="nav-link {{ Request::path() == 'admin/khach-hang' ? 'active' : '' }}">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Khách hàng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('nhan-vien') }}" class="nav-link {{ Request::path() == 'admin/nhan-vien' ? 'active' : '' }}">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Nhân viên
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ route('danhsachloai') }}" class="nav-link  {{ Request::path() == 'admin/loai' ? 'active' : '' }}">
              <i class="nav-icon fa fa-cubes"></i>
              <p>
                Loại sản phẩm
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('danhsachxuatxu') }}" class="nav-link {{ Request::path() == 'admin/xuatxu' ? 'active' : '' }}">
              <i class="nav-icon fa fa-language"></i>
              <p>
                Xuất xứ sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('danhsachthuonghieu') }}" class="nav-link {{ Request::path() == 'admin/thuonghieu' ? 'active' : '' }}">
              <i class="fas fa-warehouse"></i>
              <p>
                Thương hiệu sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('danhsachlo') }}" class="nav-link {{ Request::path() == 'admin/lo' ? 'active' : '' }}">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Lô hàng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('danhsachsanpham', ['sort'=> 'danh-sach']) }}" class="nav-link
              @if (
                Request::path() == 'admin/san-pham/danh-sach' || 
                Request::path() == 'admin/san-pham/gia-tang' ||
                Request::path() == 'admin/san-pham/gia-giam'
                )
                active
              @endif
              ">
              <i class="nav-icon far fa-heart"></i>
              <p>
                Sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview 
            @if (Request::path() == 'admin/congdung' || Request::path() == 'admin/congdungphu')
              menu-open
            @endif
          ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Tác dụng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('danhsachcongdung') }}" class="nav-link {{ Request::path() == 'admin/congdung' ? 'active' : '' }}" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tác dụng chính</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('danhsachcongdungphu') }}" class="nav-link {{ Request::path() == 'admin/congdungphu' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tác dụng phụ</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview
            @if (Request::path() == 'admin/khuyenmai/voucher')
              menu-open
            @endif 
            ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa fa-gift"></i>
              <p>
                Khuyến mãi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="{{ route('voucher') }}" class="nav-link
                  @if (Request::path() == 'admin/khuyenmai/voucher')
                    active
                  @endif
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Voucher</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="{{ route('banner') }}" class="nav-link @if (Request::path() == 'admin/banner')
            active
          @endif">
              <i class="nav-icon far fa fa-picture-o"></i>
              <p>
                Banner
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('danhsachdonhang') }}" class="nav-link @if (Request::path() == 'admin/donhang')
            active
          @endif">
              <i class="nav-icon fa fa-sticky-note"></i>
              <p>
                Đơn hàng
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ route('danhsachhinhthucthanhtoan') }}" class="nav-link ">
              <i class="nav-icon fa fa fa-money"></i>
              <p>
                Hình thức thanh toán
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('danhsachhinhthucvanchuyen') }}" class="nav-link ">
              <i class="nav-icon fa fa-fighter-jet"></i>
              <p>
                Hình thức vận chuyển
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="{{ route('danhsachngoaite') }}" class="nav-link @if (Request::path() == 'admin/ngoaite')
            active
          @endif">
            <i class="nav-icon fa fa-money"></i>
              <p>
                Ngoại tệ
              </p>
            </a>
          </li>
        </ul>
      </nav>
      @else
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          {{-- Cái sidebar sửa ở đây là được --}}
          <li class="nav-item ">
            <a href="{{ route('admin') }}" class="nav-link  {{ Request::path() == 'admin' ? 'active' : '' }}">
              <i class="nav-icon fa fa-tachometer"></i>
              <p>
                Trang chính
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('khachhang') }}" class="nav-link {{ Request::path() == 'admin/khach-hang' ? 'active' : '' }}">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Khách hàng
              </p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a href="{{ route('danhsachloai') }}" class="nav-link  {{ Request::path() == 'admin/loai' ? 'active' : '' }}">
              <i class="nav-icon fa fa-cubes"></i>
              <p>
                Loại sản phẩm
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('danhsachlo') }}" class="nav-link {{ Request::path() == 'admin/lo' ? 'active' : '' }}">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Lô hàng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('danhsachsanpham', ['sort'=> 'danh-sach']) }}" class="nav-link
              @if (
                Request::path() == 'admin/san-pham/danh-sach' || 
                Request::path() == 'admin/san-pham/gia-tang' ||
                Request::path() == 'admin/san-pham/gia-giam'
                )
                active
              @endif
              ">
              <i class="nav-icon far fa-heart"></i>
              <p>
                Sản phẩm
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview
            @if (Request::path() == 'admin/khuyenmai/voucher')
              menu-open
            @endif 
            ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fa fa-gift"></i>
              <p>
                Khuyến mãi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="{{ route('voucher') }}" class="nav-link
                  @if (Request::path() == 'admin/khuyenmai/voucher')
                    active
                  @endif
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Voucher</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="{{ route('banner') }}" class="nav-link @if (Request::path() == 'admin/banner')
            active
          @endif">
              <i class="nav-icon far fa fa-picture-o"></i>
              <p>
                Banner
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('danhsachdonhang') }}" class="nav-link @if (Request::path() == 'admin/donhang')
            active
          @endif">
              <i class="nav-icon fa fa-sticky-note"></i>
              <p>
                Đơn hàng
              </p>
            </a>
          </li>
        </ul>
      </nav>
      @endif
    </div>
    <!-- /.sidebar -->
  </aside>