@extends('admin.template.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1>Chi tiết sản phẩm</h1>
          </div>
          <div class="col-sm-4">
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item"><a href="{{ route('danhsachsanpham', ['sort'=> 'danh-sach']) }}">Sản phẩm</a></li>
              <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
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
    </div>
      <!-- Main content -->
      <section class="invoice p-3">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              Tên sản phẩm: {{$sanpham->sp_ten}}
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
              @if ($lo == 0)
                <span class="badge bg-red">Hết hàng</span>
              @else
                <span class="badge bg-green">Còn hàng</span>
              @endif
              {{-- @if ($sanpham->sp_trangthai == 1)
                <a href="{{ route('hethang', ['id'=> $sanpham->sp_id ]) }}" class="btn-xs btn-success">Còn hàng</a>
              @else
                <a href="{{ route('conhang', ['id'=> $sanpham->sp_id ]) }}" class="btn-xs btn-danger">Hết hàng</a>
              @endif --}}
            </p>
            @if ($chitietlo)
              <p>Giá gốc: {{number_format($chitietlo->ctl_dongia)}} </p>
              
            @else
            <p>Giá gốc: Chưa nhập hàng</p>
            <p><a href="#" data-toggle="modal" data-target="#exampleModal1">Nhập hàng</a> </p>
            @endif
            {{-- @if ($chitietlo)
              <p>Giá gốc: {{number_format($chitietlo->ctl_dongia)}}</p>
            @else
            <p>Giá gốc: Chưa nhập hàng</p>
            @endif --}}
            <p>Giá bán: {{number_format($sanpham->sp_giaban)}}</p>
            <button type="button" class="btn-xs btn-primary" data-toggle="modal" data-target="#exampleModal">
              Cập nhật giá bán
            </button>
            <!-- Button trigger modal -->
            
            
            <p>Giá khuyễn mãi: {{ number_format($sanpham->sp_giakhuyenmai) == 0 ? 'Chưa có khuyễn mãi' : number_format($sanpham->sp_giakhuyenmai) }}</p>
            @if (number_format($sanpham->sp_giakhuyenmai) != 0)
              <a href="{{ route('resetGia', ['id'=> $sanpham->sp_id]) }}">Quay về giá cũ</a>
            @endif
            <p>Số lượng: {{ $lo }}</p>
            <p>Hạn sử dụng:
              @if ($chitietlo)
                  {{ $chitietlo->lo_hansudung }}
              @else
                  Chưa có sản phẩm
              @endif
            </p>
           
            
            
            
            <p>Tác dụng: {{ $sanpham->cd_ten }}</p>
            <p>Tác dụng phụ: {{ $sanpham->cdp_ten }}</p>
            <p>Đánh giá sản phẩm</p>
            <p>
              <div id="rating">
                @if ($sanpham->sp_danhgia == 0)
                    <span>Sản phẩm chưa có đánh giá</span>
                @endif
                @if ($sanpham->sp_danhgia == 5)
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                @elseif ($sanpham->sp_danhgia >= 4 && $sanpham->sp_danhgia < 5)
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                @elseif ($sanpham->sp_danhgia >= 3 && $sanpham->sp_danhgia < 4)
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star "></span>
                  <span class="fa fa-star"></span>
                @elseif ($sanpham->sp_danhgia >= 2 && $sanpham->sp_danhgia < 3)
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star "></span>
                  <span class="fa fa-star "></span>
                  <span class="fa fa-star"></span>
                @elseif ($sanpham->sp_danhgia >= 1 && $sanpham->sp_danhgia < 2)
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star "></span>
                  <span class="fa fa-star "></span>
                  <span class="fa fa-star "></span>
                  <span class="fa fa-star"></span>
                @endif
            </div>
            </p>
            <br>
            <br>
            <p><b>Mô tả</b></p>
            <p>{!! $sanpham->sp_thongtin !!}</p>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            Ảnh đại diện
            @if ($sanpham->sp_anhdaidien == '')
              <p>Chưa có hình ảnh</p>
            @else
              <p>
                <img src="{{ asset('upload/sanpham') }}/{{ $sanpham->sp_anhdaidien }}" alt="Ảnh sản phẩn" width="200" height="400">
              </p>
            @endif
            
          </div>
          

          <div class="col-sm-4 invoice-col">
            <legend>Tạo khuyến mãi</legend>
            <form action="{{ route('khuyenmaisanpham', ['id'=> $sanpham->sp_id]) }}" method="get">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Chọn mức khuyến mãi</label>
                <select class="form-control" name="giatri">
                  <option value="5">5%</option>
                  <option value="10">10%</option>
                  <option value="15">15%</option>
                  <option value="20">20%</option>
                  <option value="25">25%</option>
                  <option value="30">30%</option>
                  <option value="35">35%</option>
                  <option value="40">40%</option>
                  <option value="45">45%</option>
                  <option value="50">50%</option>
                </select>
              </div>
              <button type="submit">Chọn</button>
            </form>
            <div class="form-group mt-3">
                <label for="exampleFormControlSelect1">Ngày bắt đầu đấu giá</label>
                <input value="{{$sanpham->dgsp_ngaybatdau}} " class="form-control" disabled/>
              </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Ngày kết thúc đấu giá</label>
                <input value="{{$sanpham->dgsp_ngayketthuc}} " class="form-control" disabled/>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Trạng thái</label>
                 @if ($sanpham->dgsp_trangthai == 0 )
                   <p style="color:green"> Chưa đấu giá </p>
                  @else
                   <p style="color:red"> Đã đấu giá </p>
                 @endif
            </div>

            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
  
        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <h3>Danh sách hình ảnh</h3>
            <p>
              <a href="{{ route('themhinhanh', ['id'=> $sanpham->sp_id ]) }}" class="btn btn-primary">Thêm ảnh</a>
            </p>
            <table class="table table-striped">
              <thead>
              <tr>
                <th>STT</th>
                <th>Tên ảnh</th>
                <th>Ảnh đại diện</th>
                <th>Hình ảnh</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
                <?php $stt = 1; ?>
                @foreach ($anhsanpham as $item => $value)
                <tr>
                  <td>{{$stt++}}</td>
                  <td>
                    <p style="
                      white-space: nowrap;
                      width: 200px;
                      text-overflow: ellipsis;
                      overflow: hidden;
                    ">
                      {{$value->ha_ten}}
                    </p>
                  </td>
                  
                  <td>
                    @if ($sanpham->sp_anhdaidien == $value->ha_ten)
                      <i class="fa fa-check" aria-hidden="true"></i>
                    @endif
                  </td>
                  <td>
                    <img src="{{ asset('upload/sanpham') }}/{{ $value->ha_ten }}" alt="Ảnh sản phẩn" width="200" height="200">
                  </td>
                  <td>
                    @if ($sanpham->sp_anhdaidien == $value->ha_ten)
                      <a href="{{ route('xoahinhanh', ['idHA'=> $value->ha_id, 'idSP' => $sanpham->sp_id ]) }}" class="btn btn-danger mt-2">Xóa</a>
                    @else
                      <a href="{{ route('datanhdaidien', ['tenHA'=> $value->ha_ten, 'idSP' => $sanpham->sp_id ]) }}" class="btn btn-primary mt-2">Đặt làm ảnh đại diện</a>
                      <a href="{{ route('xoahinhanh', ['idHA'=> $value->ha_id, 'idSP' => $sanpham->sp_id ]) }}" class="btn btn-danger mt-2">Xóa</a>
                    @endif
                  </td>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="{{ route('capnhatgiaban', ['id'=>$sanpham->sp_id]) }}" method="get">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Điều chỉnh giá bán</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="">
                <div class="form-group">
                  <label for="">Giá cũ</label>
                  <p class="form-control">{{ number_format($sanpham->sp_giaban) }}đ</p>
                </div>
                <div class="form-group">
                  <label for="">Giá mới</label>
                  <input type="number" name="giaban" id="" class="form-control">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nhập sản phẩm: {{ $sanpham->sp_ten }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('nhaphang') }}">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Tên lô hàng</label>
                <input name="tenLo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên loại sản phẩm . . . ">
              </div>
              <div class="form-group">
                <label>Sản phẩm:</label>
                <input type="text" class="form-control" name="id_sp" value="{{ $sanpham->sp_id }}" readonly>
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