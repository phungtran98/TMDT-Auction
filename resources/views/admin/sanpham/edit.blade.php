@extends('admin.template.master')
@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
            Sửa thông tin loại sản phẩm
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-2">
        <form method="POST" action="{{ route('capnhatsanpham', ['id'=>$sanpham->sp_id]) }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Mã số</label>
                <input name="" readonly type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sanpham->sp_id}}">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tên sản phẩm</label>
              <input name="tensanpham" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sanpham->sp_ten}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Giá bán</label>
              <input name="giaban" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sanpham->sp_ten}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Thông tin sản phẩm</label>
              <input name="thongtin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$sanpham->sp_ten}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Loại</label>
              <select class="form-control" id="exampleFormControlSelect1" name="loai">
                  @foreach ($loai as $item => $value)
                    <option value="{{$value->l_id}}">{{$value->l_ten}}</option>
                  @endforeach
              </select>
            </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Công dụng</label>
            <select class="form-control" id="exampleFormControlSelect1" name="congdung">
                @foreach ($congdung as $item => $value)
                  <option value="{{$value->cd_id}}">{{$value->cd_ten}}</option>
                @endforeach
            </select>
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Công dụng phụ</label>
          <select class="form-control" id="exampleFormControlSelect1" name="congdungphu">
              @foreach ($congdungphu as $item => $value)
                <option value="{{$value->cdp_id}}">{{$value->cdp_ten}}</option>
              @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Xuất xứ</label>
          <select class="form-control" id="exampleFormControlSelect1" name="xuatxu">
              @foreach ($xuatxu as $item => $value)
                <option value="{{$value->xx_id}}">{{$value->xx_ten}}</option>
              @endforeach
          </select>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Ngày và thời gian bắt đầu đấu giá</label>
         <input  disabled  value=" {{$sanpham->dgsp_ngaybatdau}}" step="1" class="form-control" id="exampleInputEmail1" >
         <input name="ngayBD" type="datetime-local" value="{{$sanpham->dgsp_ngaybatdau}}" step="1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập ngày và thời gian bắt đầu cho đấu giá">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Ngày và thời gian kết thúc đấu giá</label>
         <input  value="{{$sanpham->dgsp_ngaybatdau}}" disabled class="form-control" >
           <input name="ngayKT" type="datetime-local" value="{{$sanpham->dgsp_ngaybatdau}}" step="1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập ngày và thời gian bắt đầu cho đấu giá">
      </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
            <a href="{{ route('danhsachsanpham', ['sort'=> 'danh-sach']) }}" class="btn btn-default">Quay về</a>
          </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection