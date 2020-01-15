@extends('layouts.master')
@section('content')
 <div class="row">
        <div class="col-lg-12 margin-tb">
                <h2>Customer Edit</h2>
        </div>
    </div>
<form method="POST" action="{{route('customer.update', $customer->id)}}">
@method('PATCH')
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Họ và tên</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$customer->name}}">
  </div>
  <div class="form-group">
    <label for="phone">Số điện thoại</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{$customer->phone}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$customer->email}}">
  </div>
  <button type="submit" class="btn btn-success">Update</button>
  <a class="btn btn-secondary" href="{{route('customer.index')}}">Cancel</a>
</form>
@endsection
