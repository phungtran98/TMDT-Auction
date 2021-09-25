@extends('admin.template.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
            <h1>Nhập hàng</h1>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
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
        
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
@endsection