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
						<h1>Tìm kiếm từ khóa '{{ $search }}'</h1>
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
				<div class="col-sm-12">
					<div class="product-listing-view">
						<div class="view-navigation margin-top-0">
							<div class="info-text">
                                @if ($count == 0)
                                    Không có sản phẩm liên quan
                                @else
								    <p>Có {{ $count }} sản phẩm</p>
                                @endif
							</div>
							<div class="right-content">
								<div class="grid-list">
									<ul>
										
									</ul>
								</div>
								<div class="input-select">
									
								</div>
							</div>
						</div>
						<div class="row">
                            @foreach ($data as $item)
                            <div class="col-md-12">
								<div class="list-item product-single margin-top-0">
									<div class="thumb-holder" style="width: 300px">
                                        @if ($item->sp_anhdaidien == '')
                                        <img class="img-responsive" alt="Single product" src="{{ asset('upload') }}/nothing.jpg" width="100%">
                                    @else
                                        <img class="img-responsive" alt="Single product" src="{{ asset('upload/sanpham') }}/{{ $item->sp_anhdaidien }}" style="height: 100%"  width="100%">
                                    @endif
									</div>
									<div class="product-info">
										<a href="{{ route('sanpham', ['id'=>$item->sp_id]) }}"><h2>{{ $item->sp_ten }}</h2></a>
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
										<div class="link-button">
											<a class="trendify-btn black-bordered margin-top-20px" href="#">Add to cart</a>
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
						
					</div>
					<!-- / pagination -->
					
				</div>
				
			</div>
		</div>
	</div>
	<!-- / content area -->
@endsection