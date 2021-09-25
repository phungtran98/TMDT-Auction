@extends('admin.template.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nhân viên</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin') }}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Nhân viên</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            @foreach ($nhanvien as $item)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                Mã nhân viên : {{ $item->nv_id }}
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-8">
                      <h2 class="lead"><b></b></h2>
                      <p class="text-muted text-sm"><b>Tên: {{ $item->nv_ten }}</b>  </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>Đ/c: {{ $item->nv_diachi }}</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>SĐT: {{ $item->nv_sdt }}</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-at"></i></span>Gmail: {{ $item->nv_email }}</li>
                        
                      </ul>
                    </div>
                    <div class="col-4 text-center">
                      {{-- <img src="{{ asset('front-end/avata-women.png') }}" alt="" class="img-circle img-fluid"> --}}
                      {{-- @if ($item->kh_gioitinh == "Nam") --}}
                        <img src="{{ asset('front-end/avata-men.png') }}" alt="" class="img-circle img-fluid">
                      {{-- @else --}}
                        {{-- <img src="{{ asset('front-end/avata-women.png') }}" alt="" class="img-circle img-fluid"> --}}
                      {{-- @endif --}}
                      
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" data-id="{!! $item->nv_id !!}" data-toggle="modal" data-target="#ModalEdit" class="btn btn-sm btn-primary editModalBtn">
                        <i class="fas fa-user"></i> Chỉnh sửa
                    </a>
                    <a href="#" class="btn btn-sm bg-danger deleteUser" data-id="{!! $item->nv_id !!}" data-toggle="modal" data-target="#ModalDelete">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
                {{-- {!! $khachhang->links() !!} --}}
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="nhanvien"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="formEdit" method="POST">
              @csrf
              {{-- <div class="form-group">
                <label>Mã số nhân viên: </label>
                <input type="text" class="form-control" id="nv_ma">
              </div> --}}
              <div class="form-group">
                <label>Tên nhân viên</label>
                <input type="text" class="form-control" name="nv_ten" id="nv_ten">
              </div>
              <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" class="form-control" name="nv_diachi" id="nv_diachi">
              </div>
              <div class="form-group">
                <label>Số điện thoại</label>
                <input type="text" class="form-control" name="nv_sdt" id="nv_sdt">
              </div>
              <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" name="nv_email" id="nv_email">
              </div>
              
              <button type="submit" class="btn btn-primary">Sửa</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    {{-- Modal xóa --}}
    <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="nhanvienDelete"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="formDelete" method="GET">
              {{-- <div class="form-group">
                <label>Mã số nhân viên: </label>
                <input type="text" class="form-control" id="nv_ma">
              </div> --}}
              <div class="form-group">
                <label>Tên nhân viên</label>
                <input type="text" class="form-control" disabled name="nv_ten" id="nv_tenDel">
              </div>
              {{-- <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div> --}}
              <button type="submit" class="btn btn-danger">Xóa</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function () {
        $('.editModalBtn').click(function () { 
          var id = $(this).data('id');
          var action ='{{URL::to('admin/nhan-vien/edit/')}}/'+id;
          var url_update = '{{URL::to('admin/nhan-vien/update/')}}/' + id;
          $.ajax({
            type: "get",
            url: action,
            // data: "{'id' : id}",
            dataType: "json",
            success: function (response) {
              $('#nhanvien').text('Sửa thông tin nhân viên');
              $('#nv_ten').val(response.nv_ten);
              $('#nv_diachi').val(response.nv_diachi);
              $('#nv_sdt').val(response.nv_sdt);
              $('#nv_email').val(response.nv_email);
              $('#formEdit').attr('action', url_update);
            }
          });
        });
        $('.deleteUser').click(function (e) { 
          e.preventDefault();
          var id = $(this).data('id');
          var action ='{{URL::to('admin/nhan-vien/edit/')}}/'+id;
          var url_del = '{{URL::to('admin/nhan-vien/delete/')}}/' + id;
          $.ajax({
            type: "get",
            url: action,
            // data: "{'id' : id}",
            dataType: "json",
            success: function (response) {
              console.log(response);
              $('#nhanvienDelete').text('Xác nhận xóa nhân viên');
              $('#nv_tenDel').val(response.nv_ten);
              $('#formDelete').attr('action', url_del);
            }
          });
        });
      });
    </script>
@endsection