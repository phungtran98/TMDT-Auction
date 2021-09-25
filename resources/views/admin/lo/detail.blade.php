@extends('admin.template.master')
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-4">
          <h1>Chi tiết lô hàng</h1>
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            {{-- <li class="breadcrumb-item"><a href="{{ route('danhsachsanpham') }}">Lô hàng</a></li> --}}
            <li class="breadcrumb-item active">Chi tiết lô hàng</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <div class="col-12">
      @if (count($errors) > 0)
      <div class=" alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          @foreach ($errors->all() as $error)
            <strong>{{ $error }}</strong>
            <br>
          @endforeach
      </div>
      @endif
      @if (Session::has('alert-info'))
        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>{{Session::get('alert-info')}}</strong>
        </div>
        {{Session::put('alert-info',null)}}
      @endif
  </div>
    <!-- Main content -->
    <section class="invoice p-3">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            Lô : {{ $lo->lo_ten }} 
            <br>
              <small class="pull-right"></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          
        </div>
        

        <div class="col-sm-4 invoice-col">
         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <h3>Tên sản phẩm: {{ $chitietlo->sp_ten }}</h3>
          <p>
            Đơn giá: {{ number_format($dongia) }}
          </p>
          <p>
            Số lượng: {{ $soluong }}
          </p>
          <h5>Tổng tiền lô hàng: {{number_format($giatien) }}</h5>
        </div>
        <!-- /.col -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
          Chỉnh sửa
        </button>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <!-- Modal -->
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="{{ route('capnhatlo', ['id'=> $lo->lo_id]) }}" method="post">
          @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cập nhật</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Mã số</label>
                <input type="text" class="form-control" name="malo" readonly value="{{ $lo->lo_id }}">
              </div>
              <div class="form-group">
                <label>Sản phẩm</label>
                <select class="form-control" name="sanpham">
                  @foreach ($sanpham as $item)
                    <option value="{{ $item->sp_id }}">{{ $item->sp_ten }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Số lượng</label>
                <input type="number" name="soluong" class="form-control" value="{{ $soluong }}">
              </div>
              <div class="form-group">
                <label>Đơn giá</label>
                <input type="number" name="dongia" class="form-control" value="{{ $dongia }}">
              </div>
            </div>
            <div class="modal-footer">
              
              <button type="submit" class="btn btn-primary">Lưu</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  <div class="clearfix"></div>
@endsection