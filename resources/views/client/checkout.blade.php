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
						<h1>Thanh toán</h1>
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
	<form action="{{ route('checkout2') }}">
	<div class="checkout margin-bottom-70px">
		<div class="container">
			<div class="row">
					<div class="col-md-12">
						<div class="billing margin-bottom-50px">
							<h1 class="text-center">Thông tin khách hàng</h1>
							<div class="info-sec">
								<div class="last-name col-md-12 no-padding-left no-padding-right">
									<label for="last-name">Họ tên <span class="required">*</span></label><br>
									<input type="text" name="last-name" value="{{ $khachhang->kh_hoten }}"  id="last-name">
								</div>
								
								<div class="company-name">
									<label for="company-name">Số điện thoại</label><br>
									<input type="text" name="company-name" value="{{ $khachhang->kh_sdt }}" id="company-name">
								</div>
								
								<div class="your-address">
									<label for="company-name">Địa chỉ<span class="required">*</span></label>
									<input type="text" name="your-address" value="{{ $khachhang->kh_diachi }}" id="your-address">
								</div>
							</div>
						</div>
					</div>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<div class="cart-totals">
						<h1 class="text-center">Giỏ hàng</h1>
						<div class="info-sec">
							<table>
								<tbody>
									<tr class="cart-subtotal" >
										<td colspan="3" style="padding-left: 35px; font-weight: bold;">Tên sản phẩm</td>
										<td class="subtotal" style=" font-weight: bold;">Giá tiền</td>
                                    </tr>
                                    @foreach ($cart as $item)
									<tr class="product-info">
										<td colspan="3">
										<span class="quantity">{{ $item->quantity }}</span>
										<span class="product-name">{{ $item->name }}</span>
										</td>
										<td>{{ number_format($item->price) }}</td>
                                    </tr>
                                    @endforeach
									
									<tr class="order-total">
										<th colspan="3">Tổng tiền</th>
										<td class="amount"><strong>
											{{-- Tính toán lại số tiền giảm --}}
											@if (Session::has('sotiengiam'))
												<span style="text-decoration: line-through;">{{ number_format($totalPrice) }}</span>
												<br>
												<span>{{ number_format($totalPrice - Session::get('sotiengiam'))  }}</span>
											@else
												{{ number_format($totalPrice) }}
											@endif
										</strong></td>
									</tr>			
								</tbody>
							</table>
							<div class="cupon-code margin-top-20px">
								<input type="submit" name="checkout" value="Đặt hàng" class="btn-black calculate">
							</div>
						</div>
					</div>
				</div>
				{{-- comment --}}
				</form>
				
				<div class="col-md-6">
					@if (Session::has('alert'))
						<div class="alert alert-danger">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>{{Session::get('alert')}}</strong>
						</div>
						{{Session::put('alert',null)}}
					@endif
					@if (Session::has('thanh-cong'))
						<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>{{Session::get('thanh-cong')}}</strong>
						</div>
						{{Session::put('thanh-cong',null)}}
					@endif
					<form action="{{ route('ap-dung-voucher') }}" method="get">
						<div class="payment">
							<h3>Mã giảm giá:</h3>
							
							@if (Session::has('code'))
								<div class="payment-method">
									<span>Nhập mã giảm giá</span>
									<p><input type="text" name="code" readonly value="{{ Session::get('code') }}"></p>							
								</div>
							@else
								<div class="payment-method">
									<span>Nhập mã giảm giá</span>
									<p><input type="text" name="code" placeholder="Nhập mã giảm giá"></p>							
								</div>
							@endif
							@if (Session::has('code'))
								<div class="cupon-code text-right margin-top-20px">
									<a href="{{ route('bo-ap-dung-voucher') }}" class="btn-black calculate">Bỏ áp dụng voucher</a>
								</div>
							@else
								<div class="cupon-code text-right margin-top-20px">
									<input type="submit" value="Áp dụng" class="btn-black calculate">
								</div>
							@endif
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection