@extends('home')
@section('title', 'Danh sách khách hàng')
@section('content')
<div class="container">
     <div class="col-12">
           <div class="row">
               <div class="col-12"><h1>Danh Sách Khách Hàng</h1></div>
               <div class="col-12">
                   @if (Session::has('success'))
                      <p class="text-success">
                         <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                      </p>
                   @endif
               </div>

            <a class="btn btn-primary" href="{{ route('customers.create') }}">Thêm mới</a>
        </div>
        <br>
        <table class="table table-bordered">
            <thead class="thead-dark text-center">
          <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Ngày Sinh</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody class="text-center">
          @if(count($customers) == 0)
          <tr><td colspan="4">Không có dữ liệu</td></tr>
          @else
                @foreach($customers as $key => $customer)
                <tr>
                      <th scope="row">{{ ++$key }}</th>
                      <td>{{ $customer->name }}</td>
                      <td>{{ $customer->dob }}</td>
                      <td>{{ $customer->email }}</td>
                      <td><a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-info">sửa</a>
                      <a href="{{ route('customers.destroy', $customer->id) }}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                </tr>
                @endforeach
          @endif
          </tbody>
        </table>
      </div>
    </div>
@endsection
