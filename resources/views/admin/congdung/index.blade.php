@extends('admin.template.master')
@section('content')
  
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-4">
        <h1>Công dụng</h1>
      </div>
      <div class="col-sm-4">
        
      </div>
      <div class="col-sm-4">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Công dụng</li>
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
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Thêm công dụng</a>
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
                <th>Mã công dụng</th>
                <th>Tên công dụng</th>
                <th>Ngày nhập</th>
                <th>Ngày cập nhật</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <?php $stt = 1; ?>
              @foreach ($congdung as $item => $value)
              <tr>
                <td>{{$stt++}}</td>
                <td>{{$value->cd_id}}</td>
                <td>{{$value->cd_ten}}</td>
                <td>{{$value->created_at}}</td>
                <td>{{$value->updated_at}}</td>
                <td>
                  <a href="{{ route('xoaxuatxu', ['id'=>$value->cd_id]) }}" class="btn btn-default">Chi tiết</a>
                  <a href="{{ route('suacongdung', ['id'=>$value->cd_id]) }}" class="btn btn-primary">Sửa</a>
                  {{-- <a href="{{ route('xoacongdung', ['id'=>$value->cd_id]) }}" class="btn btn-danger">Xóa</a> --}}
                </td>
              </tr>
              @endforeach

            </tbody>
            
          </table>
          <nav aria-label="Page navigation example">
            {!! $congdung->links() !!}
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
            <h5 class="modal-title" id="exampleModalLabel">Thêm công dụng</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('themcongdung') }}">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Tên công dụng</label>
                <input name="tenCD" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên công dụng . . . ">
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