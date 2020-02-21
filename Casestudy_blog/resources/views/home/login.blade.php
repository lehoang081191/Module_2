@extends('home.master')
@section('title','Login')
@section('content')
<div class="col-lg-8">
        <h2 style="margin-top:50px">Đăng nhập</h2>
        <form action="{{route('home.post.login')}}" method="POST">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="email">Tên tài khoản:</label>
            <input type="text" class="form-control"
            @if(session('uname'))
            value="{{session('uname')}}"
            @endif
            id="email" placeholder="Nhập tên tài khoản" name="username">
          </div>
          <div class="form-group">
            <label for="pwd">Mật khẩu:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="password">
          </div>
          @if(session('error'))
          <div class="control-group">
            <div class="controls row-fluid">
              <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Cảnh báo!</strong> {{session('error')}}
              </div>
            </div>
          </div>
          @endif
          <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
</div>
@endsection
