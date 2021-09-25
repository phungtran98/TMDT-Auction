@extends('client.template.master')
@section('title')
    Khách hàng
@endsection
@section('content')
<div class="page_title_area">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="page_title">
          <h1>Trang cá nhân</h1>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="bredcrumb">
          <ul>
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Đơn hàng</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Đổ dữ liệu vào đây --}}
<div class="content">
  <div class="container">
    <div class="row">
      <div class="right-side col-md-9 col-md-push-3 col-sm-12">
        <h2>Đơn hàng</h2>
        <div class="col-md-12">
            @foreach ($orders as $item)
                <div class="col-md-12">
                    <h1 style="margin: 0px;">Mã đơn: #{{ $item->dh_madon }}</h1>
                    <p>Trạng thái thanh toán: @if ($item->dh_trangthai == 1)
                      <span  style="color: black; font-weight: bold;">Đang xử lý</span>
                      @elseif ($item->dh_trangthai == 2)
                      <span style="color: green;">Đã duyệt</span>
                      @elseif ($item->dh_trangthai == 3)
                      <span style="color: blue;;">Đã thanh toán</span>
                      @else
                      <span style="color: red;">Hủy đơn</span>
                      @endif</p>
                    <p>Trạng thái vận chuyển: 
                      @if ($item->dh_quatrinhvanchuyen == 1)
                        <span style="color: burlywood;">Đang lưu kho</span>
                      @elseif ($item->dh_quatrinhvanchuyen == 2)
                        <span style="color: darkorange">Đang vận chuyển</span>
                      @else
                        <span style="color: deepskyblue;">Đã nhận hàng</span>
                      @endif
                    </p>
                    <a href="">Xem chi tiết</a>
                </div>
            @endforeach
        </div>
      </div>
      <div class="col-md-3 col-md-pull-9 col-sm-12">
        <div class="side-bar">
          <div class="sidebar-list widget">
            <h4>Tài khoản cá nhân</h4>
            <ul>
              <li><a href="{{ route('thong-tin-khach-hang', [ 'username' => Session::get('kh')]) }}" class="triangle">Thông tin cá nhân</a></li>
              <li><a href="{{ route('get-orders') }}" class="triangle">Đơn hàng</a></li>
              <li><a href="{{ route('wish-list') }}" class="triangle">Sản phẩm yêu thích</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection