<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_pescription = $_POST["product_pescription"];
        $price = $_POST["price"];
        $discount_percent = $_POST["discount_percent"];
        $discount_Amount = ($price * $discount_percent) / 100;
        $discountprice = $price - $discount_Amount;
    }
    ?>
    <div id="content">
        <h1>Future Value Calculator</h1>
        <form>
            <div id="data">
                <label>Product Description:</label><?php echo $product_pescription ?>
                <br />

                <label>Price:</label><?php echo $price . "$" ?>
                <br />

                <label>Discount Percent:</label><?php echo $discount_percent . "%" ?>
                <br />

                <label>Discount Amount:</label><?php echo $discount_Amount . "$" ?>
                <br />

                <label>Discount Price:</label><?php echo $discountprice . "$" ?>
            </div>
        </form>
    </div>
</body>

</html>