@extends('client.template.master')
@section('content')
@if (Session::has('alert-info'))
<div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{{Session::get('alert-info')}}</strong>
</div>
{{Session::put('alert-info',null)}}
@endif
{{-- <div class="row-12">
    <div class="col-4" style="float: left; margin-left:50px">
      <div class="side-bar">
        <div class="sidebar-list widget">
          <h4>Tài khoản của tôi</h4>
          <ul>
            <li><a href="#" class="triangle">Theo dõi đơn hàng</a></li>
            <li><a href="#" class="triangle">Ví voucher</a></li>
            
          </ul>
        </div>
      </div>
    </div>
  <div class="col-8">
    
      <div class="card">
       
        <div class="card-header" style="margin: 50px 0px 0px 400px">
          <h3 class="card-title">
              Thông tin tài khoản
          </h3>
        </div>
        
        <div class="card-body table-responsive p-2" style="margin: 0px 100px 50px 400px">
          <form method="POST" action="{{ route('capnhatthongtintaikhoan', ['id'=>$khachhang->kh_id])}}">
              @csrf
              
              <div class="form-group">
                <label for="exampleInputEmail1">Họ tên</label>
              <input  name="hoten" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$khachhang->kh_hoten}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input disabled="disabled" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$khachhang->kh_email}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Giới tính</label>
                  <input  name="gioitinh" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$khachhang->kh_gioitinh}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Địa chỉ</label>
                  <input  name="diachi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$khachhang->kh_diachi}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Số điện thoại</label>
                  <input name="sdt" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$khachhang->kh_sdt}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Mật khẩu</label>
                  <input name="matkhau" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$khachhang->password}}">
              </div>
              <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="{{route('chitietkhachhang', ['username'=>$khachhang->username] )}}" class="btn btn-default">Quay về</a>
            </form>
        </div>
      </div>
    </div>

</div>
@endsection --}}

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

{{-- Đổ dữ liệu vào đây --}}
<div class="content">
  <div class="container">
    <div class="row">
      <div class="right-side col-md-9 col-md-push-3 col-sm-12">
        <h2>Thông tin cá nhân</h2>
        <div class="col-md-12">
          <div class="contact login">
            <form method="POST" action="{{ route('capnhatthongtintaikhoan', ['id'=>$khachhang->kh_id])}}">
              @csrf
              <div class="col-md-12 no-padding-left">
                <div class="your-name">
                  <label for="your-name">Họ tên</label><br>
                  <input type="text" name="hoten" value="{{$khachhang->kh_hoten}}" id="your-name">
                </div>
              </div>
              

              {{-- Không được sửa mật khẩu ở đây nữa --}}
              


              
              
              <div class="col-md-12 no-padding-left">
                <div class="email">
                  <label for="your-subject">Số điện thoại</label><br>
                  <input type="text" name="sdt" value="{{$khachhang->kh_sdt}}" id="your-subject">
                </div>
              </div>
              
              <div class="col-md-6 no-padding-left">
                <div class="your-website">
                  <label for="your-website">Giới tính</label>
                  <input type="text" name="gioitinh" value="{{$khachhang->kh_gioitinh}}" id="your-website">	
                </div>
              </div>
              
              <div class="col-md-12 no-padding-left">
                <div class="your-message">
                  <label for="your-message">Địa chỉ</label><br>
                  <textarea name="diachi" cols="10" rows="6" id="your-message" >{{$khachhang->kh_diachi}}</textarea>
                </div>
              </div>
              
              <div class="clear-fix"></div>
              
              <div class="col-md-6 no-padding-left">	
                <div class="submit col-md-12 no-padding-left">
                  <button type="submit" class="btn btn-success">Lưu</button>
                  <a href="{{route('chitietkhachhang', ['username'=>$khachhang->username] )}}" class="btn btn-default">Quay về</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-md-pull-9 col-sm-12">
        <div class="side-bar">
          <div class="sidebar-list widget">
            <h4>Tài khoản cá nhân</h4>
            <ul>
              <li><a href="#" class="triangle">Thông tin cá nhân</a></li>
              <li><a href="#" class="triangle">Ví voucher</a></li>
              <li><a href="#" class="triangle">Đơn hàng</a></li>
              <li><a href="{{ route('wish-list') }}" class="triangle">Sản phẩm yêu thích</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection