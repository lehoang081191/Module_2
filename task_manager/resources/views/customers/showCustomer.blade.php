@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Customer Detail</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{route('customer.index')}}">Back</a>
        </div>
    </div>
</div>
<div class="row">
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th class="text-center">
                    Họ và tên
                </th>
                <th class="text-center">
                    Số điện thoại
                </th>
                <th class="text-center">
                    Email
                </th>
                <th class="text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td>{{$customer->name}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->email}}</td>
                <td>
                    <a href="{{route('customer.edit', $customer->id)}}" class="btn btn-warning" role="button">Edit</a>
                    <form style="display:inline" onclick="return confirm('Are you sure?')" action="{{route('customer.destroy', $customer->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
