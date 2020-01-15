@extends('layouts.master')
@section('content')
 <div class="row">
        <div class="col-lg-12 margin-tb">
                <h2>Add new Customer</h2>
        </div>
    </div>
<form method="POST" action="{{route('customer.store')}}">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Họ và tên </label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
  </div>
  <div class="form-group">
    <label for="phone">Số điện thoại</label>
    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-success">Create</button>
  <a class="btn btn-secondary" href="{{route('customer.index')}}">Cancel</a>
</form>
@endsection
