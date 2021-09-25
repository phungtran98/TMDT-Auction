@extends('admin.template.master')
@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
            Sửa thông tin ngoại tệ
        </h3>
      </br>
        @if (Session::has('alert-info'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>{{Session::get('alert-info')}}</strong>
        </div>
        {{Session::put('alert-info',null)}}
      @endif
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-2">
        <form method="POST" action="{{ route('capnhatngoaite', ['id'=>$ngoaite->nt_id]) }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Mã số</label>
                <input name="" readonly type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$ngoaite->nt_id}}">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tên ngoại tệ</label>
              <input name="tenNgoaite" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$ngoaite->nt_ten}}">
              <label for="exampleInputEmail1">Tỉ giá ngoại tệ</label>
              <input name="tigia" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$ngoaite->nt_tigia}}">
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
            <a href="{{ route('danhsachngoaite') }}" class="btn btn-default">Quay về</a>
          </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection