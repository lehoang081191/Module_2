@extends('home.master')
@section('title',$category->cate)
@section('content')
<!-- Blog Entries Column -->
<div class="col-md-8">

    <h1 class="my-4">{{$category->cate}}

    </h1>
    @foreach($new as $val)
        @if($val->status == 1)

                <!-- Blog Post -->
                <div class="card mb-4">
                <img class="card-img-top" src="{{asset($val->avatar)}}" height="500px" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{$val->title}}</h2>
                    <u><small>{{$val->category->cate}}</small></u>
                    <p class="card-text">{{$val->description}}</p>
                    <a href="{{route('home.get.content',$val->changetitle)}}" class="btn btn-primary">Xem thêm &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Được đăng vào lúc <i>{{$val->created_at}}</i> bởi <b>{{$val->author}}</b>
                </div>
                </div>

        @endif
    @endforeach

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Trước</a>
      </li>
      {{-- <li class="page-item disabled">
        <a class="page-link" href="#">Sau &rarr;</a>
      </li> --}}
    </ul>

  </div>
@endsection
