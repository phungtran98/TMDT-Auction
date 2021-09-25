@extends('client.template.master')

@section('title')
    {{ $product->sp_ten }}
@endsection

@section('content')
<div class="page_title_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="page_title">
                    <h1>Chi tiết sản phẩm</h1>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="bredcrumb">
                    <ul>
                        {{-- <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Men's</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- content area -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-md-6">
                    <div class="single-slider-item">
                        <ul class="owl-slider">
                            @foreach ($productImage as $item => $value)
                            <li class="item">
                                <img src="{{ asset('upload/sanpham/'.$value->ha_ten) }}" alt="" class="img-responsive">
                            </li>
                            @endforeach
                        </ul>
                        <ul class="thumbnails-wrapper">
                            @foreach ($productImage as $item => $value)
                            <li class="thumbnail">
                                <a href="#"><img src="{{ asset('upload/sanpham/'.$value->ha_ten) }}" alt="" class="img-responsive"></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <a href="#"><h3>{{ $product->sp_ten }}</h3></a>
                        @if ($product->sp_danhgia == 0)
                            <div class="rated">
                                <ul>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        @endif
                        @if ($product->sp_danhgia <= 1 && $product->sp_danhgia > 0)
                            <div class="rated">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        @endif
                        @if ($product->sp_danhgia <= 2 && $product->sp_danhgia > 1)
                            <div class="rated">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        @endif
                        @if ($product->sp_danhgia <= 3 && $product->sp_danhgia > 2)
                            <div class="rated">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        @endif
                        @if ($product->sp_danhgia <= 4 && $product->sp_danhgia > 3)
                            <div class="rated">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        @endif
                        @if ($product->sp_danhgia <= 5 && $product->sp_danhgia > 4)
                            <div class="rated">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        @endif
                        @if (Session::has('ngoaite'))
                                            @if (number_format($product->sp_giakhuyenmai) == 0)
                                                {{ number_format($product->sp_giaban/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                            @else
                                                <p style="text-decoration: line-through">{{ number_format($product->sp_giaban/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}</p>
                                                {{ number_format($product->sp_giakhuyenmai/Session::get('tigia'),2) }} {{ Session::get('ngoaite') }}
                                            @endif
                                        @else
                                            @if (number_format($product->sp_giakhuyenmai) == 0)
                                                {{ number_format($product->sp_giaban) }} VNĐ
                                            @else
                                                <p style="text-decoration: line-through">{{ number_format($product->sp_giaban) }} đ</p>
                                                {{ number_format($product->sp_giakhuyenmai) }} VNĐ
                                            @endif
                                        @endif
                        <br>
                        <span class="sku">Còn {{ $product->sp_soluong }} sản phẩm trong kho</span>
                        <p>Tác dụng: {{ $product->cd_ten }}</p>
                        <p>Tác dụng phụ: {{ $product->cdp_ten }}</p>
                        <div class="product-desc">
                            <span class="item-number"><b>Mã sản phẩm:</b>  SP-{{ $product->sp_id }}</span><br>
                            <span class="item-cat"><b>Loại sản phẩm:</b>  {{ $category->l_ten }}</span>
                            <br>
                            <span class="item-cat"><b>Thời gian còn lại:</b> <span id="timelefthtml"> 00:00:00</span> </span>
                        </div>
                        {{-- <div>
                            <form action="{{ route('add-cart', ['id'=> $product->sp_id]) }}" method="get">
                                <div class="quantity">
                                    <label>Số lượng</label><input type="number" step="1" min="0" max="99" name="qty" value="1" title="Qty" class="qty">
                                </div>
                                <div class="add-to-cart">
                                    <button type="submit" class="trendify-btn black-bordered">Thêm vào giỏ hàng</button>
                                </div>
                            </form>
                        </div> --}}
                         <div class="quantity" >
                                   <input type="number"
                                class="form-control" name="" value="{{  $product->sp_giaban }}" id="priceAuction" disabled style="width:100%" >
                        </div>
                         <button type="submit" id="submitAuction" class="trendify-btn black-bordered">Đấu giá</button>
                        <br>
                        {{-- <div class="fb-like" data-href="{{ asset('') }}{{ Request::path() }}" data-width="" data-layout="button" data-action="like" data-size="large" data-share="false">
                        </div>
                        <div class="fb-share-button" data-href="{{ asset('') }}{{ Request::path() }}" data-layout="button" data-size="large">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                            Chia sẻ</a>
                        </div> --}}
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="product-tab">
                        <ul class="nav nav-tabs">
                            <li class="nav active"><a data-toggle="tab" href="#tab1">THÔNG TIN ĐẤU GIÁ</a></li>
                            <li><a data-toggle="tab" href="#tab2">MÔ TẢ SẢN PHẨM</a></li>
                            <li><a data-toggle="tab" href="#tab3">ĐÁNH GIÁ KHÁCH HÀNG</a></li>
                            <li><a data-toggle="tab" href="#tab4">ĐÁNH GIÁ MẠNG XÃ HỘI</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab1" class="tab-pane active">
                                <table class="table table-striped " id="tblEntAttributes">
                                    <tbody>
                                        <tr>
                                            <th> <strong></strong> STT</th>
                                            <th><strong></strong>Khách hàng</th>
                                            <th><strong></strong>Giá đấu giá</th>
                                            <th><strong></strong>Thời gian</th>
                                        </tr>   
                                    </tbody>
                                </table>
                            </div>
                            <div id="tab2" class="tab-pane">
                                <h3>Thông tin chi tiết về sản phẩm</h3>
                                <p>{!! $product->sp_thongtin !!}</p>
                                
                            </div>
                            <div id="tab3" class="tab-pane">
                                <h3>Bình luận bằng tài khoản khách hàng</h3>
                                
                                @if (Session::has('kh'))
                                    <form action="{{ route('comment', ['sanpham'=>$product->sp_id]) }}" method="POST">
                                        @csrf
                                        <label for="">Đánh giá</label>
                                        <br>
                                        <div id="rating" style="display:block;">
                                            <input type="radio" id="star5" name="rating" value="5" />
                                            <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                            
                                            <input type="radio" id="star4half" name="rating" value="4.5" />
                                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                            
                                            <input type="radio" id="star4" name="rating" value="4" />
                                            <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                            
                                            <input type="radio" id="star3half" name="rating" value="3.5" />
                                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                            
                                            <input type="radio" id="star3" name="rating" value="3" />
                                            <label class = "full" for="star3" title="Meh - 3 stars"></label>
                                            
                                            <input type="radio" id="star2half" name="rating" value="2.5" />
                                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                            
                                            <input type="radio" id="star2" name="rating" value="2" />
                                            <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                            
                                            <input type="radio" id="star1half" name="rating" value="1.5" />
                                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                            
                                            <input type="radio" id="star1" name="rating" value="1" />
                                            <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                            
                                            <input type="radio" id="starhalf" name="rating" value="0.5" />
                                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                        </div>
                                        <br>
                                        <br>
                                        <label for="">Nội dung</label>
                                        <br>
                                        <textarea name="noidung" id="" style="margin: 0px; width: 520px; height: 80px;"></textarea>
                                        <br>
                                        <button type="submit" class="btn btn-sm btn-primary">Bình luận</button>
                                    </form>
                                @else
                                    <p>Sử dụng tài khoản khách hàng để bình luận</p>
                                    <h3><a href="{{ route('dangnhapkhachhang') }}">Đăng nhập để bình luận</a></h3>
                                @endif
                                
                                
                                <div class="col-md-12">
                                    <h1>Bình luận</h1>
                                    @foreach ($comment as $item)
                                    <div class="col-md-1" style="border-radius: 50%;">
                                        @if ($item->kh_gioitinh == "Nam")
                                            <img src="{{ asset('front-end/avata-men.png') }}" alt="" class="img-responsive">
                                        @else
                                            <img src="{{ asset('front-end/avata-women.png') }}" alt="" class="img-responsive">
                                        @endif
                                    </div>
                                    <div class="col-md-11">
                                        <h4>{{ $item->kh_hoten }}</h4>
                                            {{-- <div class="rated">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="un-rated"><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div> --}}
                                        <p>{{ $item->bl_noidung }}</p>
                                        <br>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="tab4" class="tab-pane">
                                <h3>Bình luận bằng Facebook</h3>
                                <p>Sử dụng tài khoản facebook để bình luận về sản phẩm</p>
                                <div class="fb-comments" data-href="{{ asset('') }}{{ Request::path() }}" data-numposts="5" data-width=""></div>
                            </div>
                        </div>
                    </div>
                    
                    <hr style="border: 2px solid black;">
                    <div class="related-products margin-top-70px">
                        <h4>Sản phẩm liên quan</h4>
                        <ul class="related-products-slider">
                            @foreach ($productCate as $item)
                            <li class="item">
                                <div class="product-single">
                                    <div class="product-img">
                                        @if ($item->sp_anhdaidien == '')
												<img class="img-responsive" style="width: 280px;" src="{{ asset('upload') }}/nothing.jpg" alt="">
											@endif
												<img class="img-responsive lazy-load" style="width: 280px;" src="{{ asset('upload/sanpham') }}/{{ $item->sp_anhdaidien }}" alt="">
                                        <div class="actions">
                                            <ul>
                                                <li><a class="zoom" href="{{ asset('front-end-2') }}/img/single_1.jpg"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="product-details-1.html"><i class="fa fa-expand"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h2><a href="{{ route('sanpham', ['id'=>$item->sp_id]) }}"><h2>{{ $item->sp_ten }}</h2></a></h2>
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
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- pagination -->
                    <div class="pagination">
                        
                    </div>
                    <!-- / pagination -->
                </div>
            </div>

           
        </div>
    </div>
</div>
<!-- / content area -->
  <script src="https://cdn.socket.io/4.1.2/socket.io.min.js" integrity="sha384-toS6mmwu70G0fw54EGlWWeA4z3dyJ+dlXBtSURSKN4vyRFOcxd3Bzjj/AoOwY+Rg" crossorigin="anonymous"></script>
<script>
 $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const ip_address = '127.0.0.1';
        const socket_port = '3000';
        const socket = io(ip_address + ":" + socket_port);
        let   getTime = "";
        $("#submitAuction").click(function (e) { 
        // $("#getVaule").val();
            let price = parseInt($("#priceAuction").val());
            console.log(price);
            let priceIncrease = price + price*0.35;
            let userName = `{{Session::get('kh')}}`;
            const time =gettime();
            let content = {
                'name':userName,
                'price': price,
                'time':getTime,
                'timeLocal': time,
                'increase':priceIncrease
            }

            socket.emit("sendChatToServer", content);
            $("#priceAuction").val(priceIncrease);
        });

        socket.on("sendChatToClient",(mesages,step)=>{
            $("#getVaule").val(mesages.increase);  
            console.log(mesages);         
        let table_content=`
                    <tr>
                        <td>${step}</td>
                        <td>${mesages.name}</td>
                        <td><strong>${ mesages.price.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}</strong></td>
                        <td style="color:green">${mesages.time}</td>
                    </tr>
        `;
        $("#tblEntAttributes tbody").append(table_content);
       
        })
    

    //set time left  
       
        var a = setInterval(function () {
            var time_start = new Date().getTime();
            var time_end   = new Date(`{{ $product->dgsp_ngayketthuc}}`).getTime();
            var time_kitoff = new Date(`{{ $product->dgsp_ngaybatdau}}`).getTime();

            // Tự cập nhật thời gian đếm ngược
            var time_status = time_start - time_kitoff;
            // console.log(time_status);
            var time_diff = (time_end - time_start);

            console.log(time_diff);
            if(time_diff < 0)
            {
                clearInterval(a);
                alert("Hết thời gian đấu giá!");
                $("#submitAuction").attr('disabled', true);
                return str = "00:00:00";
               
            }
            // hours
            var hours     = Math.floor(time_diff / 1000 / 60 / 60);

            // minutes
            time_diff     = time_diff - hours * 1000 * 60 * 60;
            var minutes   = Math.floor(time_diff / 1000 / 60);

            // seconds
            time_diff     = time_diff - minutes * 1000 * 60;

            var seconds   = Math.floor(time_diff / 1000);
            renderTime(hours, minutes, seconds);
               
        }, 1000);


        function renderTime (hrs, min, sec) {
            var str = convertTime(hrs) + ":" + convertTime(min) + ":" + convertTime(sec);
             getTime = str;
            $("#timelefthtml").text(str);
        }

        function convertTime (val) {
            return val < 10 ? "0" + val : val;
        } 
        function gettime()
        {
            var dt = new Date();
            var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds() + ":" + dt.getMilliseconds();   
            return time
        }
});
</script>
@endsection