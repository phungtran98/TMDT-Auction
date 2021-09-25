@extends('client.template.master')
@section('title')
    Sản phẩm yêu thích
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
              <li><a href="#">Home</a></li>
              <li><a href="#">Shop</a></li>
              <li><a href="#">Men's</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="right-side col-md-9 col-md-push-3 col-sm-12">
          <h2>Sản phẩm yêu thích</h2>
          <div class="product-listing-view">
            <div class="row">
                @foreach ($wishList as $item)
                <div class="col-md-4 col-sm-6">
                    <div class="product-single margin-bottom-70px">
                        <div class="product-img">
                            @if ($item->sp_anhdaidien == '')
												<img class="img-responsive" style="width: 280px;" src="{{ asset('upload') }}/nothing.jpg" alt="">
											@endif
												<img class="img-responsive lazy-load" style="width: 280px;" src="{{ asset('upload/sanpham') }}/{{ $item->sp_anhdaidien }}" alt="">
                            <div class="actions">
                                <ul>
                                    <li><a class="zoom" href="
                                        @if ($item->sp_anhdaidien == '')
                                        {{ asset('upload') }}/nothing.jpg @endif {{ asset('upload/sanpham') }}/{{ $item->sp_anhdaidien }}"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="{{ route('sanpham', ['id'=>$item->sp_id]) }}"><i class="fa fa-expand"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h2><a href="{{ route('sanpham', ['id'=>$item->sp_id]) }}">{{ $item->sp_ten }}</a></h2>
                            <div class="star-rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-full"></i></li>
                                </ul>
                            </div>
                            <div class="price">
                                @if (number_format($item->sp_giakhuyenmai) == 0)
                                    {{ number_format($item->sp_giaban) }} đ
                                @else
                                
                                <del style="color: red"> {{ number_format($item->sp_giaban) }}đ </del>
                                <br>
                                {{ number_format($item->sp_giakhuyenmai) }}đ
                                @endif
                            </div>
                        </div>
                    </div>
                </div>    
                @endforeach
            </div>
        </div>
        </div>
        <div class="col-md-3 col-md-pull-9 col-sm-12">
          <div class="side-bar">
            <div class="sidebar-list widget">
              <h4>Tài khoản cá nhân</h4>
              <ul>
                <li><a href="{{ route('chitietkhachhang', ['username'=>Session::get('kh')]) }}" class="triangle">Thông tin cá nhân</a></li>
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