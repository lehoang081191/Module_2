@extends('home.master')
@section('title','Home')
@section('content')
<!-- Blog Entries Column -->
<div class="col-md-8">

    <h1 class="my-4">New posts

    </h1>
    @foreach($new as $val)
        @if($val->status == 1)
            <!-- Blog Post -->
            <div class="card mb-4">
            <img class="card-img-top" src="{{$val->avatar}}" height="500px" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{$val->title}}</h2>
                <u><small>{{$val->category->cate}}</small></u>
                <p class="card-text">{{$val->description}}</p>
                <a href="{{route('home.get.content',$val->changetitle)}}" class="btn btn-primary">Xem thêm &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on <i>{{$val->created_at}}</i> by <b>{{$val->author}}</b>
            </div>
            </div>
        @endif
    @endforeach

    <!-- Pagination -->
    <div class="pagination justify-content-center mt-5">
        {{ $new->links() }}
    </div>

  </div>
@endsection
