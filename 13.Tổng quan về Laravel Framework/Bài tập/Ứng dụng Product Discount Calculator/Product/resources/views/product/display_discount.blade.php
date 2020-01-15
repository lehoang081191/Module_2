<html><head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        #content{
            display: table;
            margin: auto;
            border: 3px solid #0000F0;
            padding: 20px;
        }

    </style>
</head>
<body>
<div id="content">

    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span>{{$description}}</span><br>
    <label>Price: </label>
    <span>{{$price}}</span><br>
    <label>Discount Percent: </label>
    <span>{{$discount_percent}}</span><br>
    <label>Discount Amount: </label>
    <span>{{$discount_amount}}</span><br>
    <label>Discount Price: </label>
    <span>{{$discount_price}}</span><br>
</div>

</body></html>