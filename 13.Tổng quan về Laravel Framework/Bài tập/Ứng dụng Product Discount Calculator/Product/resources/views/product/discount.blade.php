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
        #content label{
            width: 150px;
            display: inline-block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form method="post" action="{{route('showdiscount')}}">
        @csrf
        <div id="data">
            <label>Product Description:</label>
            <input type="text" name="description"><br>
            <label>List Price:</label>
            <input type="text" name="price"><br>
            <label>Discount Percent:</label>
            <input type="text" name="discount_percent">(%)<br>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate Discount">
        </div>
    </form>
</div>

</body></html>