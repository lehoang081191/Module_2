<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sotien = $_POST["investment"];
        $laisuat = $_POST["rate"];
        $nam = $_POST["years"];
        function tinh()
        {
            global $sotien, $laisuat, $nam;
            $giatri = $sotien;
            for ($i = 1; $i <= $nam; $i++) {
                $giatri = $giatri + ($giatri * $laisuat);
            }
            return $giatri;
        }
    }
    ?>
    <div id="content">
        <h1>Future Value Calculator</h1>

        <form>
            <div id="data">
                <label>Investment Amount:</label><?php echo $sotien . "$" ?>
                <br />

                <label>Yearly Interest Rate:</label><?php echo $laisuat . "%" ?>
                <br />

                <label>Number of Years:</label><?php echo $nam . "năm" ?>
                <br />

                <label>Kết quả:</label><?php echo tinh() . "$" ?>
                <br />
            </div>
        </form>
    </div>
</body>

</html>