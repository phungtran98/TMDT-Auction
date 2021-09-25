@extends('admin.template.master')
@section('content')
  
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-4">
        <h1>Sản phẩm</h1>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Sản phẩm</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          Thêm sản phẩm
        </h3>

        <div class="card-title float-right">
          {{-- Refesh lại trang để về dạng mặc định --}}
          {{-- <a href="{{ route('danhsachsanpham', ['sort'=> 'danh-sach']) }}" class="btn btn-success"><i class="fas fa-sync"></i></a> --}}
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive">
        <form method="POST" action="{{ route('themsanpham') }}">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Tên sản phẩm</label>
              <input name="tenSP" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên loại sản phẩm . . . ">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Loại sản phẩm</label>
              <select class="form-control" id="exampleFormControlSelect1" name="loai">
                  @foreach ($loai as $item => $value)
                    <option value="{{$value->l_id}}">{{$value->l_ten}}</option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Công dụng</label>
            <select class="form-control" id="exampleFormControlSelect1" name="congDung">
                @foreach ($congdung as $item => $value)
                  <option value="{{$value->cd_id}}">{{$value->cd_ten}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Công dụng phụ</label>
          <select class="form-control" id="exampleFormControlSelect1" name="congDungPhu">
              @foreach ($congdungphu as $item => $value)
                <option value="{{$value->cdp_id}}">{{$value->cdp_ten}}</option>
              @endforeach
          </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Xuất xứ</label>
        <select class="form-control" id="exampleFormControlSelect1" name="xuatXu">
            @foreach ($xuatxu as $item => $value)
              <option value="{{$value->xx_id}}">{{$value->xx_ten}}</option>
            @endforeach
        </select>
    </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Ngày và thời gian bắt đầu đấu giá</label>
         <input name="ngayBD" type="datetime-local" value="2021-10-24T20:36:00" step="1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập ngày và thời gian bắt đầu cho đấu giá">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Ngày và thời gian kết thúc đấu giá</label>
         <input name="ngayKT" type="datetime-local" value="2021-10-24T20:36:00" step="1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập ngày và thời gian kết thúc cho đấu giá">
      </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Mô tả sản phẩm</label>
            {{-- <textarea name="thongTin" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> --}}
                <textarea class="textarea" placeholder="Place some text here" name="thongTin"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Giá bán</label>
            <input name="giaBan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên giá bán . . . ">
          </div>
            <button type="submit" class="btn btn-primary" id="add">Thêm</button>
            <a href="{{ route('danhsachsanpham', ['sort'=> 'danh-sach']) }}" class="btn btn-default">Quay về</a>
          </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <script>
    $(function () {
      // Summernote
      $('.textarea').summernote()
    })


  </script>
@endsection