@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Customers List</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{route('customer.index')}}">Back</a>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th class="text-center">
                STT
            </th>
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
        @foreach($customers as $key=>$customer)
        <tr class="text-center">
            <td>{{++$key}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->email}}</td>
            <td class="text-center">
                <a href="{{route('customer.show', $customer->id)}}" class="btn btn-info" role="button">Detail</a>
                <a href="{{route('customer.edit', $customer->id)}}" class="btn btn-warning" role="button">Edit</a>
                <a role="button">
                    <form style="display:inline" onclick="return confirm('Are you sure?')" action="{{route('customer.destroy', $customer->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
