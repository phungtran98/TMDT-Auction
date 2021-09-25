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
            <a href="{{ route('giao-dien-them') }}" class="btn btn-info">Thêm Sản phẩm</a>
          </h3>

          <div class="card-title float-right">
            {{-- Refesh lại trang để về dạng mặc định --}}
            <a href="{{ route('danhsachsanpham', ['sort'=> 'danh-sach']) }}" class="btn btn-success"><i class="fas fa-sync"></i></a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap" id="category_table">
            <thead>
              <tr>
                <th>STT</th>
                <th>Mã sản phẩm</th>
                <th>Tên Sản phẩm</th>
                <th>Số lượng
                  {{-- Nếu nó đang ở trang bình thường thì khi click vào sắp xếp tăng --}}
                  @if (Request::path() == 'admin/san-pham/danh-sach' || Request::path() == 'admin/san-pham/gia-tang' || Request::path() == 'admin/san-pham/gia-giam' || Request::path() == 'admin/san-pham/km-tang' || Request::path() == 'admin/san-pham/km-giam' || Request::path() == 'admin/san-pham/tt-tang' || Request::path() == 'admin/san-pham/tt-giam')
                    <a href="{{ route('danhsachsanpham', ['sort'=> 'sl-tang']) }}"><i class="fas fa-sort"></i></a>
                  @endif
                  {{-- Nếu nó đang ở trang sắp xếp tăng thì khi click vào sẽ thành sắp xếp giảm --}}
                  @if(Request::path() == 'admin/san-pham/sl-tang')
                    <a href="{{ route('danhsachsanpham', ['sort'=> 'sl-giam']) }}"><i class="fas fa-sort"></i></a>
                  @endif
                  {{-- Ngược lại --}}
                  @if (Request::path() == 'admin/san-pham/sl-giam')
                    <a href="{{ route('danhsachsanpham', ['sort'=> 'sl-tang']) }}"><i class="fas fa-sort"></i></a>
                  @endif
                </th>
                {{-- Cái này là sắp xếp --}}
                <th>Giá bán 
                  {{-- Nếu nó đang ở trang bình thường thì khi click vào sắp xếp tăng --}}
                  @if (Request::path() == 'admin/san-pham/danh-sach' || Request::path() == 'admin/san-pham/sl-tang' || Request::path() == 'admin/san-pham/sl-giam' || Request::path() == 'admin/san-pham/km-tang' || Request::path() == 'admin/san-pham/km-giam' || Request::path() == 'admin/san-pham/tt-tang' || Request::path() == 'admin/san-pham/tt-giam')
                    <a href="{{ route('danhsachsanpham', ['sort'=> 'gia-tang']) }}"><i class="fas fa-sort"></i></a>
                  @endif
                  {{-- Nếu nó đang ở trang sắp xếp tăng thì khi click vào sẽ thành sắp xếp giảm --}}
                  @if(Request::path() == 'admin/san-pham/gia-tang')
                    <a href="{{ route('danhsachsanpham', ['sort'=> 'gia-giam']) }}"><i class="fas fa-sort"></i></a>
                  @endif
                  {{-- Ngược lại --}}
                  @if (Request::path() == 'admin/san-pham/gia-giam')
                    <a href="{{ route('danhsachsanpham', ['sort'=> 'gia-tang']) }}"><i class="fas fa-sort"></i></a>
                  @endif
                </th>


                <th>Giá khuyễn mãi
                  {{-- Nếu nó đang ở trang bình thường thì khi click vào sắp xếp tăng --}}
                  @if (Request::path() == 'admin/san-pham/danh-sach' || Request::path() == 'admin/san-pham/sl-tang' || Request::path() == 'admin/san-pham/sl-giam'|| Request::path() == 'admin/san-pham/gia-tang' || Request::path() == 'admin/san-pham/gia-giam' || Request::path() == 'admin/san-pham/tt-tang' || Request::path() == 'admin/san-pham/tt-giam')
                    <a href="{{ route('danhsachsanpham', ['sort'=> 'km-tang']) }}"><i class="fas fa-sort"></i></a>
                  @endif
                  {{-- Nếu nó đang ở trang sắp xếp tăng thì khi click vào sẽ thành sắp xếp giảm --}}
                  @if(Request::path() == 'admin/san-pham/km-tang')
                    <a href="{{ route('danhsachsanpham', ['sort'=> 'km-giam']) }}"><i class="fas fa-sort"></i></a>
                  @endif
                  {{-- Ngược lại --}}
                  @if (Request::path() == 'admin/san-pham/km-giam')
                    <a href="{{ route('danhsachsanpham', ['sort'=> 'km-tang']) }}"><i class="fas fa-sort"></i></a>
                  @endif
                </th>
                <th>Trạng thái
                  {{-- Nếu nó đang ở trang bình thường thì khi click vào sắp xếp tăng --}}
                  @if (Request::path() == 'admin/san-pham/danh-sach' || Request::path() == 'admin/san-pham/sl-tang' || Request::path() == 'admin/san-pham/sl-giam'|| Request::path() == 'admin/san-pham/gia-tang' || Request::path() == 'admin/san-pham/gia-giam' || Request::path() == 'admin/san-pham/km-tang' || Request::path() == 'admin/san-pham/km-giam')
                    <a href="{{ route('danhsachsanpham', ['sort'=> 'tt-tang']) }}"><i class="fas fa-sort"></i></a>
                  @endif
                  {{-- Nếu nó đang ở trang sắp xếp tăng thì khi click vào sẽ thành sắp xếp giảm --}}
                  @if(Request::path() == 'admin/san-pham/tt-tang')
                    <a href="{{ route('danhsachsanpham', ['sort'=> 'tt-giam']) }}"><i class="fas fa-sort"></i></a>
                  @endif
                  {{-- Ngược lại --}}
                  @if (Request::path() == 'admin/san-pham/tt-giam')
                    <a href="{{ route('danhsachsanpham', ['sort'=> 'tt-tang']) }}"><i class="fas fa-sort"></i></a>
                  @endif
                </th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <?php $stt = 1; ?>
              @foreach ($sanpham as $item => $value)
              <tr>
                <td>{{$stt++}}</td>
                <td>SP-{{ $value->sp_id }}</td>
                <td>{{$value->sp_ten}}</td>
                <td>{{ $value->sp_soluong == NULL ? 'Chưa nhập hàng' : $value->sp_soluong }}</td>
                <td>
                  @if ($value->sp_giaban == 0)
                      <p>Chưa nhập giá bán</p>
                  @else
                      {{ number_format($value->sp_giaban) }}
                  @endif
                </td>
                <td>{{ number_format($value->sp_giakhuyenmai) == 0 ? 'Chưa có khuyễn mãi' : number_format($value->sp_giakhuyenmai) }}</td>
                @if ($value->sp_trangthai == 1)
                  <td><span class="badge bg-green">Còn hàng</span></td>
                @else
                    <td><span class="badge bg-red">Hết hàng</span></td>
                @endif
                <td>
                  <a href="{{ route('chitietsanpham', ['id'=>$value->sp_id]) }}" class="btn btn-default">Chi tiết</a>
                  <a href="{{ route('suathongtinsanpham', ['id'=>$value->sp_id]) }}" class="btn btn-primary">Sửa</a>
                  <a href="{{ route('suaxuatxu', ['id'=>$value->sp_id]) }}" class="btn btn-danger">Xóa</a>
                </td>
              </tr>
              @endforeach

            </tbody>
            
          </table>
          <nav aria-label="Page navigation example">
            {!! $sanpham->links() !!}
          </nav>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
@endsection