
@extends('client.template.master')
@section('title')
    Sản phẩm
@endsection
@section('content')

	<!-- page title -->
	<div class="page_title_area">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="page_title">
						<h1>SẢN PHẨM</h1>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="bredcrumb">
						<ul>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ page title -->
	
	
	<!-- content area -->
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-md-push-3 col-sm-12">
					<div class="trendify-banner">
						<img src="{{ asset('front-end-2/img/banner2.jpg') }}" class="img-responsive" alt="image banner">
						<div class="banner-text" style="color: black;">
							<h3 class="animate fadeInDown wow">Sản phẩm cập nhật thường xuyên</h3>
							<h4 class="animate fadeInDown wow" data-wow-delay="0.5s">Đăng nhập để mua sắm</h4>
							<a class="trendify-btn default-bordered margin-left-0" href="#">Đăng nhập ngay</a>
						</div>
					</div>
					
					<div class="product-listing-view">
						<div class="view-navigation">
							<div class="info-text">
								@if ($countProduct)
									<p>Hiển thị 5 sản phẩm trong {{ $countProduct }} sản phẩm</p>
								@else
									<p>Hiện không có sản phẩm</p>
								@endif
							</div>
							<div class="right-content">
								<div class="grid-list">
									<ul>
										<li><a href="{{ route('tatcasanpham') }}" class="active"><i class="fa fa-align-justify "></i></a></li>
										<li><a href="{{ route('tatcasanpham-2') }}"><i class="fa fa-th"></i></a></li>
									</ul>
								</div>
								<div class="input-select">
									<select name="sorted" id="sorted">
										<option value="-1">Sorted by</option>
										  <option>Price</option>
										  <option>Useless</option>
										  <option>Important</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							@foreach ($allProduct as $item)
								<div class="col-md-12">
									<div class="list-item product-single margin-top-0">
										<div class="thumb-holder">
											@if ($item->sp_anhdaidien == '')
												<img class="img-responsive" style="width: 280px;" src="{{ asset('upload') }}/nothing.jpg" alt="">
											@endif
												<img class="img-responsive lazy-load" style="width: 280px;" src="{{ asset('upload/sanpham') }}/{{ $item->sp_anhdaidien }}" alt="">
										</div>
											{{-- @php
												$phamtramgiam = $item->sp_giakhuyenmai * 100 / $item->sp_giaban;
											@endphp --}}
										<div class="product-info">
											<a href="{{ route('sanpham', ['id'=>$item->sp_id]) }}" style="white-space: nowrap; 
												width: 500px; 
												overflow: hidden;
												text-overflow: ellipsis;"><h2>{{ $item->sp_ten }}</h2></a>
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
												@endif
											</div>
											{{-- <p>{{ $item->sp_thongtin }}</p> --}}
											<div class="link-button">
												<a class="trendify-btn black-bordered margin-top-20px" href="{{ route('add-cart', ['id'=> $item->sp_id]) }}">Thêm vào giỏ hàng</a>
											</div>
											<a class="like" href="#"><i class="fa fa-heart-o"></i></a>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
					
					<!-- pagination -->
					<div class="pagination">
						<div class="col-xs-1 no-padding">
							<a href="#"><span class="pagicon arrow_left"></span></a>
						</div>
						<div class="col-xs-offset-1 col-sm-offset-3 col-xs-7">
							{!! $allProduct->links() !!}
						</div>
						<div class="col-xs-1 no-padding text-right">
							<a href="#"><span class="pagicon arrow_right"></span></a>
						</div>
					</div>
					<!-- / pagination -->
					
				</div>
				<div class="col-md-3 col-md-pull-9 col-sm-12">
					<div class="side-bar">
						<div class="sidebar-list widget">
							<h4>Loại sản phẩm</h4>
							<ul>
								@foreach ($allCategory as $item)
									<li><a href="{{ route('loaisanpham', ['idCategory'=> $item->l_id]) }}" class="triangle">{{ $item->l_ten }}</a></li>
								@endforeach
							</ul>
						</div>
						<div class="popular-products widget">
							<h4>Sản phẩm mới</h4>
							@foreach ($newProduct as $item)
							<div class="product-single">
								<div class="product-img">
									@if ($item->sp_anhdaidien == '')
										<img class="img-responsive" style="width: 280px;" src="{{ asset('upload') }}/nothing.jpg" alt="">
									@endif
										<img class="img-responsive lazy-load" style="width: 280px;" src="{{ asset('upload/sanpham') }}/{{ $item->sp_anhdaidien }}" alt="">
								</div>
								<div class="product-info">
									<h2>{{ $item->sp_ten }}</h2>
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
                                        @endif
									</div>
								</div>
							</div>	
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- / content area -->

@endsection