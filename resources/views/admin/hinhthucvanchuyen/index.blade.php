@extends('admin.template.master')
@section('content')
  
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-4">
        <h1>Hình thức vận chuyển</h1>
      </div>
      <div class="col-sm-4">
        
      </div>
      <div class="col-sm-4">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Hình thức vận chuyển</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

    <div class="col-12">
      @if (Session::has('alert-info'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>{{Session::get('alert-info')}}</strong>
        </div>
        {{Session::put('alert-info',null)}}
      @endif
      @if (Session::has('alert-del'))
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>{{Session::get('alert-del')}}</strong>
        </div>
        {{Session::put('alert-del',null)}}
      @endif
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Thêm hình thức vận chuyển</a>
          </h3>

          <div class="card-title">
            
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap" id="category_table">
            <thead>
              <tr>
                <th>STT</th>
                <th>Mã hình thức vận chuyển</th>
                <th>Tên hình thức vận chuyển</th>
                <th>Ngày nhập</th>
                <th>Ngày cập nhật</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <?php $stt = 1; ?>
              @foreach ($hinhthucvanchuyen as $item => $value)
              <tr>
                <td>{{$stt++}}</td>
                <td>{{$value->htvc_id}}</td>
                <td>{{$value->htvc_ten}}</td>
                <td>{{$value->created_at}}</td>
                <td>{{$value->updated_at}}</td>
                <td>
                  {{-- <a href="{{ route('xoaxuatxu', ['id'=>$value->httt_id]) }}" class="btn btn-default">Chi tiết</a> --}}
                  <a href="{{ route('suahinhthucvanchuyen', ['id'=>$value->htvc_id]) }}" class="btn btn-primary">Sửa</a>
                  <a href="{{ route('xoahinhthucvanchuyen', ['id'=>$value->htvc_id]) }}" class="btn btn-danger">Xóa</a>
                </td>
              </tr>
              @endforeach

            </tbody>
            
          </table>
          <nav aria-label="Page navigation example">
            {!! $hinhthucvanchuyen->links() !!}
          </nav>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

    {{-- Form thêm loại ở đây --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thêm hình thức vận chuyển</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('themhinhthucvanchuyen') }}">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Tên hình thức vận chuyển</label>
                <input name="tenHTVC" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên hình thức vận chuyển . . . ">
              </div>
              <button type="submit" class="btn btn-primary" id="add">Thêm</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>
@endsection