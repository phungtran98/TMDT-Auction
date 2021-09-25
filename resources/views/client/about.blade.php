@extends('client.template.master')
@section('title')
    Giới thiệu
@endsection
@section('content')
	
<!-- page title -->
	<div class="page_title_area">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="page_title">
						<h1>GIỚI THIỆU</h1>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="bredcrumb">
						<ul>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ page title -->
	
	<!-- about shop area -->
	<div class="about_our_shop_area margin-bottom-100px">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="about_shop_img">
						<img src="{{ asset('front-end-2/img/about_shop.jpg') }}" alt="" />
					</div>
				</div>
				<div class="col-md-8 col-sm-12">
					<div class="about_shop_content">
                        <h2>Giới thiệu về cửa hàng của chúng tôi</h2>
                        <p>
                            "Nhất dáng, nhì da" quả là câu nói đúng với xã hội ngày nay. Một làn da đẹp mịn màng, trắng hồng và khỏe khoắn sẽ thu hút mọi ánh nhìn. Sở hữu da mặt đẹp cũng giúp nàng tự tin hơn khi giao tiếp. Vậy bí quyết chăm sóc da mặt đẹp là gì? Chính là biết chăm sóc da đúng cách và sử dụng những sản phẩm chất lượng từ DHC Nhật Bản. Thương hiệu DHC nổi tiếng với những loại mỹ phẩm được chiết xuất từ thiên nhiên rất an toàn và lành tính, đặc biệt không chứa chất tạo màu, tạo mùi và paraben. Hãy chăm sóc da mặt ngay từ bây giờ với bộ mỹ phẩm nhà DHC để sở hữu cho mình làn da căng mịn và trắng hồng bất chấp tuổi tác.
                        </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ about shop area -->
	
	<!-- about team area -->
	<div class="about_our_team_area margin-bottom-80px">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 margin-bottom-50px">
					<h2 class="trendify-heading middle-align"><span class="lg">chúng tôi là ai</span><span class="sm"> thành viên -</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 fadeInDown wow" data-wow-delay="0.5s" >
					<div class="single_team_member" style="height: 300px">
						<img src="{{ asset('front-end-2/img/team/member1.jpg') }}" alt="" width="100%" height="100%"/>
						<h2>Lê Ngọc Đức</h2>
						<p>Chủ tiệm</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 fadeInDown wow" data-wow-delay="0.6s">
					<div class="single_team_member" style="height: 300px">
						<img src="{{ asset('front-end-2/img/team/member2.jpeg') }}" alt="" width="100%" height="100%"/>
						<h2>Đỗ Thị Ngọc Nguyên</h2>
						<p>Thủ quỷ</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 fadeInDown wow" data-wow-delay="0.7s">
					<div class="single_team_member" style="height: 300px">
						<img src="{{ asset('front-end-2/img/team/member3.jpg') }}" alt="" width="100%" height="100%"/>
						<h2>Lương Quốc Bình</h2>
						<p>Nhân viên bán hàng</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 fadeInDown wow" data-wow-delay="0.8s">
					<div class="single_team_member" style="height: 300px">
						<img src="{{ asset('front-end-2/img/team/member4.jpg') }}" alt="" width="100%" height="100%"/>
						<h2>Đặng Thị Tường Vy</h2>
						<p>Nhân viên thu ngân</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ about team area -->
	
	<!-- about prograss bar -->
	<div class="our_experiences_area margin-bottom-50px">
		<div class="container">
			<div class="row">
				<div class="col-md-12 margin-bottom-50px">
					<h2 class="trendify-heading"><span class="lg">chúng tôi đã làm</span><span class="sm">kinh nghiệm -</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12 barWrapper">
					<h3 class="progressText">thị trường nội địa</h3>
					<div class="progress">
						<div class="progress-bar cloth-design" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80">
						</div>
						<span class="bar_over">80%</span>
                    </div>

                    <h3 class="progressText">thị trường quốc tế</h3>
					<div class="progress">
						<div class="progress-bar cloth-design" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
						</div>
						<span class="bar_over">75%</span>
                    </div>
				</div>
				<div class="col-md-6 col-sm-12 experience_content">
                    <p>Vào khoảng 35 năm trước, trong thời kì hoàng kim của hóa mỹ phẩm (mỹ phẩm được sản xuất từ các thành phần hóa học), thì DHC là công ty tiên phong trong việc dung hợp tác dụng trị liệu của các dưỡng chất tự nhiên cho làn da con người. Và dòng sản phẩm từ dầu O-liu là một trong những phát minh đầu tiên của DHC với 100% dưỡng chất làm đẹp từ thiên nhiên. Cho đến nay, DHC đã không ngừng nghiên cứu, phát triển các sản phẩm nguồn gốc thiên nhiên đạt phẩm chất tốt và thân thiện nhất với làn da.
                        Hơn thế nữa, trong ngành thực phẩm chức năng, với những nỗ lực không ngừng, DHC Nhật Bản đã đột phá giới hạn của thị trường để đem đến cho khách hàng những sản phẩm chất lượng, hàm lượng cao với giá cả cạnh tranh. Chỉ sau 7 năm, DHC đã trở thành công ty có doanh thu số 1 trong lĩnh vực thực phẩm chức năng qua kênh thương mại điện tử tại thị trường Nhật Bản.
                        Hiện tại (9/2019), DHC đã có 14.820.000 khách hàng thân thiết, chiếm giữ vị trí số 1 Nhật Bản về doanh thu mỹ phẩm, thực phẩm chức năng trên kênh bán hàng online.</p>
				</div>
			</div>
		</div>
	</div>
	<!--/ about prograss bar -->
@endsection    