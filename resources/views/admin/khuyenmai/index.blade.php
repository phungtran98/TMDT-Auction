@extends('admin.template.master')
@section('content')

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
          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Thêm loại sản phẩm</a>
        </h3>

        <div class="card-title">
          
        </div>
      </div>
      <div class="card-header">
        <div class="form-group ml-1 mr-1">
          {{-- <label>Tìm kiếm</label> --}}
          <input type="text" class="form-control" name="search" id="search" placeholder="Nhập tên sản phẩm">
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap" >
          <thead>
            <tr>
              <th>STT</th>
              <th>Mã số loại</th>
              <th>Tên loại</th>
              <th>Ngày thêm</th>
              <th>Ngày cập nhật</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody id="category_table">
            
          </tbody>
          
        </table>
        <nav aria-label="Page navigation example">
          {{-- {!! $loai->links() !!} --}}
        </nav>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

@endsection