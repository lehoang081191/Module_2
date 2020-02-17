<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header{
            min-height: 100px;
            background-color:cornflowerblue;
        }
    </style>

</head>
<body>
    <header>

    </header>

<div class="container">

    <section>
        <ul>
        @foreach ($tinhs as $tinh)

        <li><strong>Tên Tỉnh: </strong>{{$tinh->ten_tinh}}</li>
        <li><strong>Mã Tỉnh: </strong>{{$tinh->ma_tinh}}</li>
        <li><strong>Quận: </strong>
        @foreach ($tinh->quans as $quan)
            <span>{{$quan->ten_quan}}</span>
        @endforeach
        </li>
        @endforeach
         </ul>
    </section>
</div>

</body>
</html>
