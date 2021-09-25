@extends('client.template.master')
@section('title')
    Trang chủ
@endsection
@section('content')
    <!-- content -->
    <div class="content">
        <div class="container">
            <!-- Latest items -->
            <div class="latest-items margin-bottom-50px">
                <div class="trendify-tab-title">
                    <ul>
                        <li class="active"><a data-toggle="tab" href="#new">Sản phẩm mới</a></li>
                        <li><a data-toggle="tab" href="#flashsale">Flash Sale</a></li>
                    </ul>
                </div>
                <div class="tab-content">

                    <div class="trendify-prev"></div>
                    <div class="trendify-next"></div>
                    {{-- Sản phẩm mới --}}
                    <div id="new" class="tab-pane fade in active">
                        @foreach ($sanphammoi as $item => $value)
                        <div class="product-single fadeInDown wow" data-wow-delay="0.5s">
                            <div class="product-img " style="height: 300px">
                                <img class="img-responsive" alt="Single product" style="height: 100%" src="{{ asset('upload/sanpham/'.$value->sp_anhdaidien) }}">
                                <div class="actions">
                                    <ul>
                                        <li><a class="zoom" href="{{ asset('upload/sanpham/'.$value->sp_anhdaidien) }}"><i class="fa fa-search"></i></a></li>
										<li><a href="{{ route('add-wish-list', ['idProduct'=> $value->sp_id]) }}"><i class="fa fa-heart-o"></i></a></li>
										<li><a href="{{ route('sanpham', ['id'=>$value->sp_id]) }}"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <h2><a href="{{ route('sanpham', ['id'=>$value->sp_id]) }}">{{ $value->sp_ten }}</a></h2>
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
                                    @if (Session::has('ngoaite'))
                                        @if (number_format($value->sp_giakhuyenmai) == 0)
                                            {{ number_format($value->sp_giaban/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                        @else
                                            <p style="text-decoration: line-through">{{ number_format($value->sp_giaban/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}</p>
                                            {{ number_format($value->sp_giakhuyenmai/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                        @endif
                                    @else
                                        @if (number_format($value->sp_giakhuyenmai) == 0)
                                            {{ number_format($value->sp_giaban) }} VNĐ
                                        @else
                                            <p style="text-decoration: line-through">{{ number_format($value->sp_giaban) }} đ</p>
                                            {{ number_format($value->sp_giakhuyenmai) }} VNĐ
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Flash sale --}}
                    
                    <div id="flashsale" class="tab-pane fade">
                        @foreach ($flashsale as $item => $value)
                        <div class="product-single">
                            <div class="product-img" style="height: 300px">
                                <img class="img-responsive" style="height: 100%" alt="Single product" src="{{ asset('upload/sanpham/'.$value->sp_anhdaidien) }}">
                                <div class="actions">
                                    <ul>
                                        <li><a class="zoom" href="{{ asset('upload/sanpham/'.$value->sp_anhdaidien) }}"><i class="fa fa-search"></i></a></li>
										<li><a href="{{ route('add-wish-list', ['idProduct'=> $value->sp_id]) }}"><i class="fa fa-heart-o"></i></a></li>
										<li><a href="{{ route('sanpham', ['id'=>$value->sp_id]) }}"><i class="fa fa-expand"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <h2>{{ $value->sp_ten }}</h2>
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
                                    @if (Session::has('ngoaite'))
                                    @if (number_format($value->sp_giakhuyenmai) == 0)
                                        {{ number_format($value->sp_giaban/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                    @else
                                        <p style="text-decoration: line-through">{{ number_format($value->sp_giaban/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}</p>
                                        {{ number_format($value->sp_giakhuyenmai/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                    @endif
                                @else
                                    @if (number_format($value->sp_giakhuyenmai) == 0)
                                        {{ number_format($value->sp_giaban) }} VNĐ
                                    @else
                                        <p style="text-decoration: line-through">{{ number_format($value->sp_giaban) }} đ</p>
                                        {{ number_format($value->sp_giakhuyenmai) }} VNĐ
                                    @endif
                                @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    

                </div>
            </div>
            <!-- Latest items -->
            <!-- our history -->
            <div class="our-histry margin-bottom-100px">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="trendify-heading middle-align">
                            <span class="lg">Sản phẩm vừa xem</span>
                            <span class="sm">Sản phẩm vừa xem</span> 
                        </h2>
                    </div>
                </div>
                <div class="row product-grid">
                    @if (Session::has('products.recently_viewed'))
                        @foreach ($spdaxem as $item)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-latest-product margin-bottom-30px">
                                <span class="price-label">@if (Session::has('ngoaite'))
                                    @if (number_format($item->sp_giakhuyenmai) == 0)
                                        {{ number_format($item->sp_giaban/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                    @else
                                        <p style="text-decoration: line-through">{{ number_format($item->sp_giaban/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}</p>
                                        {{ number_format($item->sp_giakhuyenmai/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                    @endif
                                @else
                                    @if (number_format($item->sp_giakhuyenmai) == 0)
                                        {{ number_format($item->sp_giaban) }} VNĐ
                                    @else
                                        <p style="text-decoration: line-through">{{ number_format($item->sp_giaban) }} đ</p>
                                        {{ number_format($item->sp_giakhuyenmai) }} VNĐ
                                    @endif
                                @endif</span>
                                <img class="img-responsive" src="{{ asset('upload/sanpham/'.$item->sp_anhdaidien) }}" alt="Shoe">
                                <h4>{{ $item->sp_ten }}</h4>
                                <div class="actions">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ route('add-cart', ['id'=> $item->sp_id]) }}"><i class="fa fa-plus"></i>Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="pull-right">
                                                <li><a class="zoom" href="{{ asset('upload/sanpham/'.$item->sp_anhdaidien) }}"><i class="fa fa-search"></i></a></li>
                                                <li><a href="{{ route('add-wish-list', ['idProduct'=> $item->sp_id]) }}"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="{{ route('sanpham', ['id'=>$item->sp_id]) }}"><i class="fa fa-expand"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <!-- our history -->

            <!-- latest blogs -->
            <div class="latest-blogs margin-bottom-70px">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="trendify-heading middle-align">
                            <span class="lg">Khách hàng</span>
                            <span class="sm">ý kiến khách hàng</span> 
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-news fadeInUp wow" data-wow-delay="0.5s">
                            <div class="col-md-6 col-sm-12 col-xs-12 no-padding">
                                <div class="thumbs">
                                    <img class="img-responsive" alt="blog post" src="{{ asset('front-end-2/img/blog1.jpg') }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 no-padding">
                                <div class="news-content">
                                    <h2>Anh Nam</h2>
                                    <p class="excerpt">Sản phẩm rất tốt tôi sẽ sử dụng và giới thiệu cho nhiều người biết đến</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-news fadeInUp wow" data-wow-delay="0.5s">
                            <div class="col-md-6 col-sm-12 col-xs-12 no-padding">
                                <div class="thumbs">
                                    <img class="img-responsive" alt="blog post" src="{{ asset('front-end-2/img/blog3.jpg') }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 no-padding">
                                <div class="news-content">
                                    <h2>Anh Hiệp</h2>
                                    <p class="excerpt">Sản phẩm rất tốt tôi sẽ sử dụng và giới thiệu cho nhiều người biết đến</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- /latest blogs -->

            <!-- clients -->
            <div class="clients margin-bottom-10px">
                <ul class="client-carousel">
                    @foreach ($thuonghieu as $item => $value)
                        <li>
                            <a href="#"><img alt="logo" src="{{asset('/upload/hinhanh')}}/{{ $value->th_logo }}" style="width: 194px !important; height:194px !important "></a>
                        </li>
                    @endforeach 
                </ul>
            </div>
            <!--/ clients -->

        </div>
    </div>
    <!-- / content -->
    
@endsection
