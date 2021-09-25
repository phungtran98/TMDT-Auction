<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kl-webmedia.com/demo/trendify/home-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Sep 2018 07:40:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Asley Cosmictic - @yield('title')
    </title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('front-end-2/css/bootstrap.min.css')}}">
  
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('front-end-2/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('front-end-2/css/eleganticon.css')}}">
	
	<!-- MAGNIFIC POPUP -->
    <link rel="stylesheet" href="{{ asset('front-end-2/css/magnific-popup.css')}}">
	
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="{{ asset('front-end-2/css/owl.carousel.css')}}">
	
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="{{ asset('front-end-2/css/animate.css')}}">
	
    <!-- SLIDER REVOLUTION -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end-2/assets/plugins/rs-plugin/css/settings-ie8.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end-2/assets/plugins/rs-plugin/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" href="{{ asset('front-end-2/css/slider.css')}}">
    
	<!-- STYLESHEET -->
	<link rel="stylesheet" href="{{ asset('front-end-2/css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('front-end-2/css/footer.css')}}">
	<link rel="stylesheet" href="{{ asset('front-end-2/style.css')}}">
	<link rel="stylesheet" href="{{ asset('front-end-2/css/responsive.css')}}">
	
	<!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,500,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
	
	<!-- FAVICON -->
	<link rel="icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="{{ asset('front-end-2/img/apple-touch-icon.png') }}')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('front-end-2/img/apple-touch-icon-72x72.png') }}')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('front-end-2/img/apple-touch-icon-114x114.png') }}')}}">
    <script src="{{ asset('front-end-2/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front-end-2/notify.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
</head>

<body class="home1">
    <!-- header -->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="left"> Công ty mỹ phẩm Asley<span><i class="fa fa-phone"></i>Call us</span> +84 589 20 2409</div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="right">
                            <ul>
                                @if (Session::has('kh'))
                                    <div class="">
                                        <a href="{{ route('dangxuatkh') }}" style="float: right; margin-right: 20px;">Đăng xuất</a>
                                        <a href="{{ route('chitietkhachhang',[ 'username' => Session::get('kh')])}}" style="float: right; margin-right: 20px;">Xin chào {{Session::get('kh')}}</a>
                                    </div>
                                @else
                                    <li>
                                        <a href="{{ route('dangnhapkhachhang') }}">Đăng nhập</a>
                                        /
                                        <a href="{{ route('dangkykhachhang') }}">Đăng ký</a>
                                    </li>
                                @endif
                                
                                    <li class="toggle">
                                        <span>
                                            @if (Session::has('ngoaite'))
                                                {{ Session::get('ngoaite') }}
                                            @else
                                                VNĐ
                                            @endif
                                        </span> <i class="fa fa-angle-down"></i>
                                        <ul>
                                                <li><a href="{{ route('doingoaite', ['ngoaite'=> 0]) }}">VNĐ</a></li>
                                                @foreach ($ngoaite as $item => $value)
                                                    <li><a href="{{ route('doingoaite', ['ngoaite'=> $value->nt_id]) }}">{{$value->nt_ten}}</a></li>
                                                @endforeach
                                        </ul>
                                    </li>
                                
                            </ul>
                           
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>

        <div class="logo-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 search">
                        <form action="{{ route('search') }}" method="GET">
                            {{-- Tìm kiếm sản phẩm --}}
                            @csrf
                            <input type="text" name="search" placeholder="Tìm kiếm sản phẩm" />
                            <button type="submit"><span class="arrow_right"></span></button>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 text-center">
                        <img src="{{ asset('front-end-2/img/logo.png') }}" width="120" height="100" alt="Trendify logo" />
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 cart-icon">
                        <div class="cart">
                            <a href="#">
                                <img alt="cart" src="{{ asset('front-end-2/img/cart.png') }}">
                                <span>{{ $total }}</span>
                            </a>
                        
							<div class="cart-list hidden-xs">
                                <h5 class="title">Giỏ hàng của bạn <span></span></h5>
                                @foreach ($cart as $item)
                                    <div class="cart-item">
                                        <img class="img-responsive" alt="Single product" src="{{ asset('upload/sanpham/'.$item->associatedModel->sp_anhdaidien) }}">
                                        <a href="{{ route('remove', ['id'=>$item->id]) }}"><span class="icon_close close-icon"></span></a>
                                        <div class="product-info">
                                            <h5>{{ $item->name }} X {{ $item->quantity }}</h5>
                                            <div class="price">
                                                @if (Session::has('ngoaite'))
                                                    {{ number_format($item->price/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                                @else
                                                    {{ number_format($item->price) }} VND
                                                @endif
                                                
                                                {{-- <del> $399 </del> $259 --}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
								<div class="order-total">
									<h5 class="title">Tổng tiền:<span class="amount">
                                        @if (Session::has('ngoaite'))
                                            {{ number_format($totalPrice/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                        @else
                                            {{ number_format($totalPrice) }} VND
                                        @endif
                                            </span>
                                        </h5>
								</div>
                                
                                @if ($total == 0)
                                    Chưa có sản phẩm nào trong giỏ hàng
                                @else
                                    <a href="{{ route('clear-cart') }}" class="trendify-btn black-bordered" id="clearAll">Xóa hết</a>
    								<a href="{{ route('checkout') }}" class="trendify-btn black-bordered">Thanh toán</a>
                                @endif
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar trendify-nav megamenu">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{ route('trangchu') }}">Trang chủ</a></li>
                        <li class="
                                @if (Request::path() == 'san-pham')
                                active
                                @endif
                                @if (Request::path() == 'san-pham-2')
                                active
                                @endif
                                "><a href="{{ route('tatcasanpham') }}">Sản phẩm</a></li>
                        <li class="dropdown
                            @if (Request::path() == 'loai-san-pham/1' ||
                                Request::path() == 'loai-san-pham/2' ||
                                Request::path() == 'loai-san-pham/3' )
                            active
                            @endif

                        ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Loại sản phẩm</a>
                            <ul class="dropdown-menu">
                                @foreach ($loai as $item)
                                    <li><a href="{{ route('loaisanpham', ['idCategory'=> $item->l_id]) }}">{{ $item->l_ten }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{ Request::path() == 'gioi-thieu' ? 'active' : '' }}"><a href="{{ route('gioithieu') }}">Giới thiệu</a></li>
                        <li class="{{ Request::path() == 'lien-he' ? 'active' : '' }}"><a href="{{ route('lienhe') }}">Liên hệ</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

            </div>
            <!-- /.container-fluid -->
        </div>

    </div>
    <!-- / header -->
    <script>
       
    </script>