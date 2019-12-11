<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h2>Hiển thị số nguyên tố nhỏ hơn 100</h2>
    <?php
    function isPrime($number)
    {
        if ($number < 2) {
            return false;
        }
        if ($number === 2) {
            return true;
        }
        if ($number % 2 === 0) {
            return false;
        }
        for ($i = 2; $i * $i < $number; $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }
    for ($i = 1; $i <= 100; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
    ?>
</body>

</html>