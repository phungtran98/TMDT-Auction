@section('title')
    Loại sản phẩm
@endsection
@include('client.template.header')

<!-- page title -->
<div class="page_title_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="page_title">
                    <h1>{{ $category->l_ten }}</h1>
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
                <div class="product-listing-view">
                    <div class="view-navigation">
                        <div class="info-text">
                            <p>Đang có {{ $countProduct }} sản phẩm</p>
                        </div>
                        <div class="right-content">
                            <div class="grid-list">
                                
                            </div>
                            <div class="input-select">
                                <select name="sorted" id="sorted">
                                        <option>Sắp xếp</option>
                                        <option>Giá từ cao đến thấp</option>
                                        <option>Giá từ thấp đến cao</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($product as $item)
                        <div class="col-md-12">
                            <div class="list-item product-single margin-top-0">
                                <div class="thumb-holder">
                                    @if ($item->sp_anhdaidien == '')
                                        <img class="img-responsive" style="width: 280px;" src="{{ asset('upload') }}/nothing.jpg" alt="">
                                    @endif
                                    <img class="img-responsive lazy-load" style="width: 280px;" src="{{ asset('upload/sanpham') }}/{{ $item->sp_anhdaidien }}" alt="">
                                </div>
                                <div class="product-info">
                                    <a href="{{ route('sanpham', ['idProduct'=> $item->sp_id]) }}" style="white-space: nowrap; 
                                        width: 500px; 
                                        overflow: hidden;
                                        text-overflow: ellipsis;"><h2>{{$item->sp_ten}}</h2></a>
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
                                        <a class="trendify-btn black-bordered margin-top-20px" href="{{ route('add-cart', ['id'=> $item->sp_id]) }}">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>	
                        @endforeach
                    </div>
                </div>
                
                <!-- pagination -->
                <div class="pagination">
                    <div class="col-xs-offset-1 col-sm-offset-3 col-xs-7">
                        <ul class="pagination-number">
                            {!! $product->links() !!}
                        </ul>
                    </div>
                    <div class="col-xs-1 no-padding text-right">
                        <a href="#"><span class="pagicon arrow_right"></span></a>
                    </div>
                </div>
                <!-- / pagination -->
                
            </div>
            <div class="col-md-3 col-md-pull-9 col-sm-12">
                <div class="side-bar">
                    <div class="sCategoriesidebar-list widget">
                        <h4> Loại sản phẩm</h4>
                        <ul>
                            @foreach ($loai as $item)
                                <li><a href="{{ route('loaisanpham', ['idCategory'=> $item->l_id]) }}" class="triangle">{{ $item->l_ten }}</a></li>
                            @endforeach
                        </ul>
                    </div>   
                    <div class="popular-products widget">
                        <h4>Sản phẩm phổ biến</h4>
                        @foreach ($productPopular as $item)
                            
                            <div class="product-single">
                                <div class="product-img">
                                    @if ($item->sp_anhdaidien == '')
                                    <img class="img-responsive" style="width: 280px;" src="{{ asset('upload') }}/nothing.jpg" alt="">
                                    @endif
                                    <img class="img-responsive" style="width: 280px;" src="{{ asset('upload/sanpham') }}/{{ $item->sp_anhdaidien }}" alt="">    
                                </div>
                                <div class="product-info">
                                    <h2>{{ $item->sp_ten }}</h2>
                                    <div class="star-rating">
                                        <ul>
                                            @if ($item->sp_danhgia >= 4 && $item->sp_danhgia < 5)
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            @else
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            @endif
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
                    <div class="popular-products widget">
                        <h4>Sản phẩm đang giảm giá</h4>
                        @foreach ($sanphamKM as $item)
                            
                            <div class="product-single">
                                <div class="product-img">
                                    @if ($item->sp_anhdaidien == '')
                                    <img class="img-responsive" style="width: 300px;" src="{{ asset('upload') }}/nothing.jpg" alt="">
                                    @endif
                                    <img class="img-responsive" style="width: 300px;" src="{{ asset('upload/sanpham') }}/{{ $item->sp_anhdaidien }}" alt="">    
                                </div>
                                <div class="product-info">
                                    <h2>{{ $item->sp_ten }}</h2>
                                    <div class="star-rating">
                                        <ul>
                                            @if ($item->sp_danhgia >= 4 && $item->sp_danhgia < 5)
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            @else
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            @endif
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

@include('client.template.footer')