@extends('client.template.master')
@section('title')
    Thanh toán
@endsection

@section('content')
    <!-- page title -->
	<div class="page_title_area">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="page_title">
						<h1>Chọn phương thức thanh toán</h1>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="bredcrumb">
						<ul>
							<li><a href="#">Trang chủ</a></li>
							<li><a href="#">Thanh toán</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ page title -->
	<div class="checkout margin-bottom-70px">
		<div class="container">
			<div class="row">
                {{-- <div class="col-md-6">
                    <div class="billing margin-bottom-50px">
                        <h1 class="text-center">Thông tin khách hàng</h1>
                        <div class="info-sec">
                            <div class="last-name col-md-12 no-padding-left no-padding-right">
                                <label for="last-name">Họ tên <span class="required">*</span></label><br>
                                <input type="text" name="last-name" value="{{ $khachhang->kh_hoten }}" readonly id="last-name">
                            </div>
                            
                            <div class="company-name">
                                <label for="company-name">Số điện thoại</label><br>
                                <input type="text" name="company-name" value="{{ $khachhang->kh_sdt }}" readonly id="company-name">
                            </div>
                            
                            <div class="your-address">
                                <label for="company-name">Địa chỉ<span class="required">*</span></label>
                                <input type="text" name="your-address" value="{{ $khachhang->kh_diachi }}" readonly id="your-address">
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <form action="{{ route('method-checkout') }}" method="get">
                        <div class="cart-totals">
                            <h1 class="text-center">Phương thức thanh toán</h1>
                            <div class="info-sec">
                                <table>
                                    <tbody>
                                        <tr class="cart-subtotal" >
                                            <td colspan="4" style="padding-left: 35px; font-weight: bold;">Phương thức</td>
                                        </tr>
                                        <tr class="product-info">
                                            <td style="padding-left: 35px; font-weight: bold;"><input type="radio" name="thanhtoan" id="" value="vnpay">VNPay</td>
                                            <td style="padding-left: 35px; font-weight: bold;"><input type="radio" name="thanhtoan" id="" value="shipcod">Ship cod (phí ship 30.000)</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="cupon-code margin-top-20px">
                                    <button type="submit">Thanh toán</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>

@endsection