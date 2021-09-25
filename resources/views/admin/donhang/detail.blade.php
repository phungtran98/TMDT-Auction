@extends('admin.template.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1>Chi tiết đơn hàng</h1>
          </div>
          <div class="col-sm-4">
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item"><a href="{{ route('danhsachdonhang', ['sort'=> 'danh-sach']) }}">Đơn hàng</a></li>
              <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
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
    </div>
      <!-- Main content -->
      <section class="invoice p-3">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              Mã đơn: {{$donhang->dh_madon}}
              <br>
                <small class="pull-right"></small>
            </h2>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            <p>Trạng thái:
              @if ($donhang->dh_trangthai == 1)
                <span class="badge bg-yellow">Đang xử lý</span>
              @elseif ($donhang->dh_trangthai == 2)
                <span class="badge bg-yellow">Đã duyệt</span>
              @elseif ($donhang->dh_trangthai == 3)
                <span class="badge bg-green">Đã thanh toán</span>
              @else
                <span class="badge bg-red">Hủy đơn</span>
              @endif
              {{-- @if ($sanpham->sp_trangthai == 1)
                <a href="{{ route('hethang', ['id'=> $sanpham->sp_id ]) }}" class="btn-xs btn-success">Còn hàng</a>
              @else
                <a href="{{ route('conhang', ['id'=> $sanpham->sp_id ]) }}" class="btn-xs btn-danger">Hết hàng</a>
              @endif --}}
            </p> 
            <form action="{{ route('trangthaidonhang', ['id'=> $donhang->dh_id,'trangthaihientai' => $donhang->dh_trangthai]) }}" method="get">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Thay đổi trạng thái đơn hàng</label>
                <select class="form-control" name="trangthai">
                  <option value="1"
                  @if ($donhang->dh_trangthai == 1)
                    selected
                  @endif
                  >Đang chờ xử lý</option>
                  <option value="2"
                  @if ($donhang->dh_trangthai == 2)
                    selected
                  @endif
                  >Đã duyệt</option>
                  <option value="3"
                  @if ($donhang->dh_trangthai == 3)
                    selected
                  @endif
                  >Đã thanh toán</option>
                  <option value="4" 
                  @if ($donhang->dh_trangthai == 4)
                    selected
                  @endif
                  >Hủy đơn</option>
                  
                </select>
              </div>
              <button type="submit">Xác nhận</button>
            </form>
            {{-- @if ($chitietlo)
              <p>Giá gốc: {{number_format($chitietlo->ctl_dongia)}} </p>
              
            @else
            <p>Giá gốc: Chưa nhập hàng</p>
            <p><a href="#" data-toggle="modal" data-target="#exampleModal1">Nhập hàng</a> </p>
            @endif --}}
            <p>Quá trình vận chuyển: 
              @if ($donhang->dh_quatrinhvanchuyen == 1)
                <span class="badge bg-yellow">Đang lưu kho</span>
              @elseif ($donhang->dh_quatrinhvanchuyen == 2)
                <span class="badge bg-yellow">Đang vận chuyển</span>
              @else
                <span class="badge bg-green">Đã nhận hàng</span>
              @endif
            </p>
            <form action="{{ route('vanchuyendonhang', ['id'=> $donhang->dh_id]) }}" method="get">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Thay đổi vận chuyển đơn hàng</label>
                <select class="form-control" name="vanchuyen">
                  <option value="1" 
                  @if ($donhang->dh_quatrinhvanchuyen == 1)
                    selected
                  @endif
                  >Đang lưu kho</option>
                  <option value="2"
                  @if ($donhang->dh_quatrinhvanchuyen == 2)
                    selected
                  @endif
                  >Đang vận chuyển</option>
                  <option value="3"
                  @if ($donhang->dh_quatrinhvanchuyen == 2)
                    selected
                  @endif
                  >Đã nhận hàng</option>
                </select>
              </div>
              <button type="submit">Xác nhận</button>
            </form>

            <p>Tổng tiền đơn hàng: {{number_format($donhang->dh_tongtien)}} VND</p>
            <p>Họ tên khách hàng: {{$donhang->dh_nguoinhan}}</p>
            <p>Nơi nhận: {{$donhang->dh_noinhan}}</p>
            <p>Thời gian đặt hàng: {{$donhang->dh_thoigiandathang}}</p>
            <p>Thời gian nhận hàng: {{$donhang->dh_thoigiannhanhang}}</p>
           

            

            {{-- @if ($chitietlo)
              <p>Giá gốc: {{number_format($chitietlo->ctl_dongia)}}</p>
            @else
            <p>Giá gốc: Chưa nhập hàng</p>
            @endif --}}
            {{-- <p>Giá bán: {{number_format($sanpham->sp_giaban)}}</p>
            <button type="button" class="btn-xs btn-primary" data-toggle="modal" data-target="#exampleModal">
              Cập nhật giá bán
            </button> --}}
            <!-- Button trigger modal -->

            
            <p>Tên user: {{$donhang1->username}}</p>

            
          </div>
          <!-- /.col -->
          {{-- <div class="col-sm-4 invoice-col">
            Ảnh đại diện
            @if ($sanpham->sp_anhdaidien == '')
              <p>Chưa có hình ảnh</p>
            @else
              <p>
                <img src="{{ asset('upload/sanpham') }}/{{ $sanpham->sp_anhdaidien }}" alt="Ảnh sản phẩn" width="200" height="400">
              </p>
            @endif
            
          </div> --}}
          

          
          <!-- /.col -->
        </div>
        <!-- /.row -->
  
        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <h3>Danh sách sản phẩm</h3>
            
            <table class="table table-striped">
              <thead>
              <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                {{-- <th>Số lượng đặt</th> --}}
              </tr>
              </thead>
              <tbody>
                <?php $stt = 1; ?>
                @foreach ($donhang2 as $item => $value)
                <tr>
                  <td>{{$stt++}}</td>
                  <td>{{$value->sp_ten}}</td>
                  <td>
                      <img src="{{ asset('upload/sanpham') }}/{{$value->sp_anhdaidien}}" width="200px" height="200px">
                  </td>
                  <td>{{ number_format($value->sp_giaban)}} VND</td>
                  <td>{{ $value->sp_soluongsp }}</td>
                  {{-- <td>{{$stt++}}</td> --}}
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    <div class="clearfix"></div>
    <!-- Modal -->
    
@endsection