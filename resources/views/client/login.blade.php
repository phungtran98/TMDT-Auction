@section('title')
    Đăng nhập
@endsection

@if (Session::has('alert-info'))
<div class="alert alert-danger">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{{Session::get('alert-info')}}</strong>
</div>
{{Session::put('alert-info',null)}}
@endif

@include('client.template.header')
    @if (Session::has('kh'))
        
    @else
         <!-- page title -->
    <div class="page_title_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="page_title">
                        <h1>Đăng nhập</h1>
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
                    <div class="login">
                        <form method="POST" action="{{ route('dang-nhap') }}">
                            @csrf
                            <div class="col-md-7">
                                <div class="email">
                                    <label for="username">Tài khoản <span class="required">*</span></label><br>
                                    <input name="username" placeholder="Tên đăng nhập" type="text" required="">
                                </div>
                            </div>
                            
                            <div class="col-md-7">
                                <div class="password">
                                    <label for="password">Mật khẩu <span class="required">*</span></label><br>
                                    <input name="password" placeholder="Mật khẩu" type="password" required="">
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <a href="#">Quên mật khẩu</a><br>
                            </div>
                            <div class="clear-fix"></div>
                            
                            <div class="col-md-6 text-center">
                                <div class="submit">
                                    <button>Đăng nhập</button>
                                </div>
                            </div>
                            {{ csrf_field() }}
                        </form>
                        <div class="login-method">
                            <div class="col-md-3 col-sm-6">
                                <a class="method-facebook" href="#"><i class="fa fa-facebook"></i>Đăng nhập với Facebook</a>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a class="method-gmail" href="#"><i class="fa fa-google"></i>Đăng nhập với Gmail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
   

@include('client.template.footer')