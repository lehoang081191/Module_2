@extends('home.master')
@section('title','Edit info')
@section('content')
<div class="col-lg-8">
        <h3 style="margin-top:20px">Chỉnh sửa</h3>
        <form action="{{route('home.post.edit')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="email">Họ Tên</label>
            <input type="text"
            @if($user['fullname'])
                value="{{$user['fullname']}}"
            @endif
            class="form-control" id="email" placeholder="Nhập họ tên" name="fullname">
          </div>
          <div class="form-group">
            <label for="email">Tuổi</label>
            <input type="text" class="form-control"
            @if($user['age'])
                value="{{$user['age']}}"
            @endif
            id="email" placeholder="Nhập số tuổi" name="age">
        </div>
        <div class="control-group">

            <div class="controls">Ảnh đại diện
                <input type="file" style="display:none;" id="basicinput" name="avatar" class="span8 img-upload" >
                <br>
                <img style="padding: 10px 10px;
                background-color: white;
                box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
                -moz-box-shadow: 0 1px 2px rgba(34,25,25,0.4);
                -webkit-box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);" class="img-bnupload"
                @if($user['avatar'])
                src="{{asset($user['avatar'])}}"
                @endif
                @if(!$user['avatar'])
                src="{{asset('admin_layout/images/default.png')}}"
                @endif
                width="50px" height="50px">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control"
            @if($user['email'])
                value="{{$user['email']}}"
            @endif
            id="email" placeholder="Nhập email" name="email">
        </div>
        <div class="form-group">
            <label for="email">Facebook</label>
            <input type="text" class="form-control"
            @if($user['facebook'])
                value="{{$user['facebook']}}"
            @endif
            id="email" placeholder="Nhập facebook" name="facebook">
        </div>
        <div class="form-group">
            <label for="email">Github</label>
            <input type="text" class="form-control"
            @if($user['github'])
                value="{{$user['github']}}"
            @endif
            id="email" placeholder="Nhập github" name="github">
        </div>

          @if (count($errors) > 0)
          <div class="alert alert-danger span8">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              @foreach ($errors->all() as $error)
                  {{ $error }}<br>
              @endforeach
          </div>
          @endif
          <button type="submit" class="btn btn-default">Xác nhận</button>
        </form>
        <br>
</div>
@endsection
@section('js')
<script>
    $('.img-bnupload').click(function(){
        $('.img-upload').click();
        //var a = $('input[type="file"]').val();
        //$(".img-bnupload").attr("src",a);
    });
    $('.img-upload').change( function(event) {
        var tmppath = URL.createObjectURL(event.target.files[0]);
            $(".img-bnupload").fadeIn("fast").attr('src',tmppath);
        });
</script>
@endsection
