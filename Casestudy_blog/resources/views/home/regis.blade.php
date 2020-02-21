@extends('home.master')
@section('title','Register')
@section('content')
<div class="col-lg-8">
        <h2 style="margin-top:50px">Đăng ký</h2>
        <form action="{{route('home.post.regis')}}" method="POST">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="email">Tên tài khoản:</label>
            <input type="text" class="form-control" id="email" placeholder="Nhập tài khoản" name="username">
          </div>
          <div class="form-group">
            <label for="pwd">Mật khẩu:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="password">
          </div>
          <div class="form-group">
            <label for="pwd">Nhập lại mật khẩu:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Nhập lại mật khẩu" name="repassword">
          </div>
          @if (count($errors) > 0)
          <div class="alert alert-danger span8">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              @foreach ($errors->all() as $error)
                  {{ $error }}<br>
              @endforeach
          </div>
          @endif
          <button type="submit" class="btn btn-primary">Đăng ký</button>
        </form>
</div>
@endsection
