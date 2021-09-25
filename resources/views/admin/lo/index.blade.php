@extends('admin.template.master')
@section('content')
  
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-4">
        <h1>Lô hàng</h1>
      </div>
      <div class="col-sm-4">
        
      </div>
      <div class="col-sm-4">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Lô hàng</li>
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
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Thêm lô hàng</a>
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
                <th>Mã lô</th>
                <th>Tên lô hàng</th>
                <th>Số lượng sản phẩm</th>
                <th>Hạn sử dụng</th>
                <th>Ngày nhập</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <?php $stt = 1; ?>
              @foreach ($lo as $item => $value)
              <tr>
                <td>{{$stt++}}</td>
                <td>{{$value->lo_id}}</td>
                <td>{{$value->lo_ten}}</td>
                <td>{{ $value->ctl_soluong }}</td>
                <td>{{$value->lo_ngaysanxuat}}</td>
                <td>{{$value->lo_hansudung}}</td>
                <td>
                  <a href="{{ route('chitietlo', ['id'=>$value->lo_id]) }}" class="btn btn-default">Chi tiết</a>
                  <a href="" class="btn btn-warning">Thanh lý</a>
                </td>
              </tr>
              @endforeach

            </tbody>
            
          </table>
          <nav aria-label="Page navigation example">
            {!! $lo->links() !!}
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
            <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('themlo') }}">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Tên lô hàng</label>
                <input name="tenLo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên loại sản phẩm . . . ">
              </div>
              <div class="form-group">
                <label>Sản phẩm:</label>
                <select class="form-control" name="id_sp">
                    @foreach ($sp as $item)
                      <option value="{{ $item->sp_id }}">{{ $item->sp_ten }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label>Ngày sản xuất</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </span>
                  </div>
                  <input type="date" name="ngaysanxuat" class="form-control float-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Hạn sử dụng</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </span>
                  </div>
                  <input type="date" name="hansudung" class="form-control float-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label for="">Đơn giá</label>
                <input type="number" name="dongia" class="form-control">
              </div>
              
              <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" name="soluong" class="form-control">
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