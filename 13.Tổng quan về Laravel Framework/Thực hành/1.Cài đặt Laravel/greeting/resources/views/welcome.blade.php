@extends('layouts.master')

@section('content')
        <h1>Hello World!!! {{ $name }}</h1>
        <h2>Tao {{$age}}</h2>
        @if ($age > 20)
        <p> {{$name}} đủ tuổi đi học</p>
        @else
        <p>{{ $name}} chưa đủ tuổi</p>
        @endif
        @for ($i = 0; $i < 5; $i++)
            <p>{{$i + 1}}</p>
        @endfor
        @foreach ($students as $stu)
        <p>{{$stu}}</p>
        @endforeach

        <form method="post">
            <form method="post">
            @csrf
            <input type="text" name="name" id="">
            <input type="text" name="age" id="">
            <input type="submit" value="submit">
        </form>
@endsection
