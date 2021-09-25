@section('title')
    Đăng ký
@endsection
@include('client.template.header')

<!-- page title -->
<div class="page_title_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="page_title">
                    <h1>Đăng ký</h1>
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
<div class="margin-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('alert-error'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close" style="margin-right: 15px;">&times;</a>
                    <strong>{{Session::get('alert-error')}}</strong>
                    </div>
                    {{Session::put('alert-error',null)}}
                @endif
                @if (Session::has('alert-info'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close" style="margin-right: 15px;">&times;</a>
                    <strong>{{Session::get('alert-info')}}</strong>
                    </div>
                    {{Session::put('alert-info',null)}}
                @endif
            </div>
            
            <div class="col-md-12">
                <div class="login">
                    <form action="{{ route('dang-ky') }}" method="POST">
                        @csrf
                        <div class="col-md-7 no-padding-left">
                            <div class="first-name">
                                <label for="your-first-name">Tên đăng nhập <span class="required">*</span></label><br>
                                <input type="text" name="username">
                                <p style="color: red;">
                                   @if ($errors->has('username'))
                                   {{ $errors->first('username') }}
                                   @endif
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-md-7 no-padding-left">
                            <div class="first-name">
                                <label for="your-last-name">Mật khẩu <span class="required">*</span></label><br>
                                <input type="password" id="myInput" name="password">
                                <p style="color: red;">
                                    @if ($errors->has('password'))
                                    {{ $errors->first('password') }}
                                    @endif
                                 </p>
                                <input type="checkbox" onclick="showPassword()">Hiển thị mật khẩu
                            </div>
                        </div>
                        
                        <div class="col-md-7 no-padding-left">
                            <div class="email">
                                <label for="your-email1">Địa chỉ Email <span class="required">*</span></label><br>
                                <input type="email" name="email">
                                <p style="color: red;">
                                    @if ($errors->has('email'))
                                    {{ $errors->first('email') }}
                                    @endif
                                 </p>
                            </div>
                        </div>
                        
                        <div class="col-md-7 no-padding-left">
                            <div class="email">
                                <label>Họ tên <span class="required">*</span></label><br>
                                <input type="text" name="hoten">
                                <p style="color: red;">
                                    @if ($errors->has('hoten'))
                                    {{ $errors->first('hoten') }}
                                    @endif
                                 </p>
                            </div>
                        </div>

                        <div class="col-md-7 no-padding-left">
                            <div class="email">
                                <label>Giới tính <span class="required">*</span></label><br>
                                <input type="radio" name="gioitinh" value="Nam"> Nam
                                <br>
                                <input type="radio" name="gioitinh" value="Nam"> Nữ
                            </div>
                            <p style="color: red;">
                                @if ($errors->has('gioitinh'))
                                {{ $errors->first('gioitinh') }}
                                @endif
                             </p>
                        </div>

                        <div class="col-md-7 no-padding-left">
                            <div class="first-name">
                                <label for="confirm-email">Số điện thoại <span class="required">*</span></label><br>
                                <input type="number" name="sdt">
                                <p style="color: red;">
                                    @if ($errors->has('sdt'))
                                    {{ $errors->first('sdt') }}
                                    @endif
                                 </p>	
                            </div>
                        </div>

                        <div class="col-md-7 no-padding-left">
                            <div class="first-name">
                                <label for="confirm-email">Địa chỉ <span class="required">*</span></label><br>
                                <textarea name="diachi" id=""  rows="5"></textarea>
                                <p style="color: red;">
                                    @if ($errors->has('diachi'))
                                    {{ $errors->first('diachi') }}
                                    @endif
                                 </p>
                            </div>
                        </div>
                        
                        <div class="col-md-6 no-padding-left">						
                            <div class="recapture-text">
                                <label for="recapture">Mã bảo vệ <span class="required">*</span></label><br>
                                <div class="col-md-6 no-padding-left">
                                    <input type="text" name="capcha" value="" class="recapture" id="recapture">
                                </div>
                                <div class="col-md-2 no-padding-left no-padding-right">
                                    <input type="text" style="background-color: pink; color: white; text-align: center;" readonly name="capchacode" value="{{ $capcha }}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="clear-fix" style="margin-bottom: 15px;"></div>
                        
                        <div class="col-md-6 no-padding-left">	
                            <div class="submit col-md-12 no-padding-left">
                                <button type="submit" class="btn btn-primary">Đăng ký</button>
                            </div>
                        </div>	
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function showPassword() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
@include('client.template.footer')