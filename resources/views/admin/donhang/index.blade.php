@extends('admin.template.master')
@section('content')
  
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-4">
        <h1>Đơn hàng</h1>
      </div>
      <div class="col-sm-4">
        
      </div>
      <div class="col-sm-4">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Đơn hàng</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
{{-- {{ \Auth::guard('nhanvien')->user()->nv_id}} --}}
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
        
        {{-- <div class="card-header">
          <div class="form-group ml-1 mr-1">
            
            <input type="text" class="form-control" name="search" id="search" placeholder="Nhập tên sản phẩm">
          </div>
        </div> --}}
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          
          <table class="table table-hover text-nowrap" >
            <thead>
              <tr>
                <th>STT</th>
                <th>Mã đơn hàng</th>
                <th>Tên người nhận</th>
                <th>Nơi nhận hàng</th>
                <th>Thời gian đặt hàng</th>
                <th>Thời gian nhận hàng</th>
                <th>Trạng thái</th>
                <th>Quá trình vận chuyển</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody id="category_table">
              @php
                  $stt=1;
              @endphp
              @foreach ($donhang as $item => $value)
              <tr>
                <td>{{$stt++}}</td>
                <td id="dh_madon">{{$value->dh_madon}}</td>
                <td id="dh_nguoinhan">{{$value->dh_nguoinhan}}</td>
                <td id="dh_noinhan">{{$value->dh_noinhan}}</td>
                <td id="dh_thoigiandathang">{{$value->dh_thoigiandathang}}</td>
                <td id="dh_thoigiannhanhang">{{$value->dh_thoigiannhanhang}}</td>
                <td id="dh_trangthai">
                  @if ($value->dh_trangthai == 1)
                  <span class="badge bg-yellow">Đang xử lý</span>
                  @elseif ($value->dh_trangthai == 2)
                  <span class="badge bg-yellow">Đã duyệt</span>
                  @elseif ($value->dh_trangthai == 3)
                  <span class="badge bg-green">Đã thanh toán</span>
                  @else
                  <span class="badge bg-red">Hủy đơn</span>
                  @endif
                </td>
                <td id="dh_quatrinhvanchuyen">         
                  @if ($value->dh_quatrinhvanchuyen == 1)
                  <span class="badge bg-yellow">Đang lưu kho</span>
                  @elseif ($value->dh_quatrinhvanchuyen == 2)
                  <span class="badge bg-yellow">Đang vận chuyển</span>
                  @else
                  <span class="badge bg-green">Đã nhận hàng</span>
                  @endif         
               </td>

                </td>
                <td>
                  
                  <a href="{{ route('chitietdonhang', ['id'=>$value->dh_madon,'user'=>$value->dh_nguoinhan]) }}" class="btn btn-default">Chi tiết</a>
                  <a href="{{ route('capnhattrangthaidonhang', ['id'=>$value->dh_madon]) }}" class="btn btn-success">Duyệt đơn hàng</a>

                </td>
              </tr>
              @endforeach
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

    {{-- Form thêm loại ở đây --}}
    <!-- Modal -->
    

    <script type="text/javascript">
      $(document).ready(function () {
        function fetch_category_data(query = '')
        {
          $.ajax({
            type: "GET",
            url: "{{ route('search-category') }}",
            data: {query : query},
            dataType: "json",
            success: function (data) {
              $('tbody').html(data.table_data);
            }
          });
        }

        $(document).on('keyup','#search', function () {
          var query = $(this).val();
          fetch_category_data(query);
        });
      });
  </script>
@endsection