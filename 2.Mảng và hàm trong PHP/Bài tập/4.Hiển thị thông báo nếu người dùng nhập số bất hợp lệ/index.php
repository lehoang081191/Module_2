<form method="post">
    <input type="text" name="x" placeholder="Enter number x">
    <input type="text" name="y" placeholder="Enter number y">
    <input type="submit" value="Calculate">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST['x'] ?? 0;
    $num2 = $_POST['y'];
    function calc($x, $y)
    {
        if (empty($x) || empty($y)) {
            echo "Please enter the number";
        } else {
            $x = (int) (join(explode(" ", trim($x))));
            $y = (int) (join(explode(" ", trim($y))));
            if ($y === 0 || ($x === 0 && $y === 0)) {
                throw new Exception("Value must be different from zero");
            } else {
                echo "sum: $x + $y = " . ($x + $y) . "<br>";
                echo "difference: $x - $y = " . ($x - $y) . "<br>";
                echo "product: $x x $y = " . $x * $y . "<br>";
                echo "quotient: $x : $y = " . $x / $y . "<br>";
            }
        }
    }
    try {
        calc($num1, $num2);
    } catch (Exception $e) {
        echo "Message: " . $e->getMessage();
    }
}
?>