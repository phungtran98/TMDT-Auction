@extends('admin.template.master')
@section('content')
      
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <h1>Quản lý banner</h1>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Banner</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Danh sách banner</h3>
            <br>
            <a href="{{ route('them-banner') }}" class="btn-sm btn-success">Thêm banner</a>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th>
                            STT
                        </th>
                        <th>
                            Tiêu đề
                        </th>
                        <th>
                            Trạng thái
                        </th>
                        <th>
                            Hình ảnh
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt = 1;
                    @endphp
                    @foreach ($data as $item)
                    <tr>
                        <td>
                            {{ $stt++ }}
                        </td>
                        <td>
                            <a>
                                {{ $item->bn_tieude }}
                            </a>
                            <br>
                            <small>
                                bla bla . . .
                            </small>
                        </td>
                        <td>
                            @if ($item->bn_trangthai == 1)
                                <a href="{{ route('capnhattrangthai', ['id'=> $item->bn_id, 'trangthai' => 0 ]) }}"><span class="badge badge-success">Hiển thị</span></a>
                            @else
                                <a href="{{ route('capnhattrangthai', ['id'=>$item->bn_id,'trangthai' => 1]) }}"><span class="badge badge-danger">Ẩn</span></a>
                            @endif
                        </td>
                        <td>
                            <img src="{{ asset('upload/banner/'.$item->bn_hinhanh) }}" class="zoomA"/>
                        </td>
                        <td align="center">
                            <a class="btn btn-primary btn-sm" href="{{ route('chi-tiet-banner', ['id'=>$item->bn_id]) }}">
                                <i class="fas fa-folder">
                                </i>
                                Xem
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Xóa
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  
      </section>
@endsection