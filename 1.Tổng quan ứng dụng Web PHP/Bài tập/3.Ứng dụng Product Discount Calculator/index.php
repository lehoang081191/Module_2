<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>
        <form action="display_discount.php" method="post">
            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="product_pescription"><br>
                <label>List Price:</label>
                <input type="text" name="price"><br>
                <label>Discount Percent:</label>
                <input type="text" name="discount_percent">(%)<br>
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" onclick="" value="Calculate Discount">
            </div>
        </form>

</body>

</html>