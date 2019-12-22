<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php
    include_once "Triangle.php";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $inputSide1 = $_POST["side1"];
        $inputSide2 = $_POST["side2"];
        $inputSide3 = $_POST["side3"];
        $color = (string) $_POST["color"];
        function test_input($data)
        {
            $data = trim($data);
            if (preg_match("/^[-+]?[0-9]*\.?[0-9]+$/", $data)) {
                return (float) $data;
            } else {
                return false;
            }
        }
        $errorinputSide1 = empty($inputSide1) ? "required side1" : !test_input($inputSide1) ? "Invalid input" : "";
        $errorinputSide2 = empty($inputSide2) ? "required side2" : !test_input($inputSide2) ? "Invalid input" : "";
        $errorinputSide3 = empty($inputSide3) ? "required side3" : !test_input($inputSide3) ? "Invalid input" : "";
        $errorcolor = empty($color) ? "required color" : "";
        if ($errorinputSide1 === "" && $errorinputSide2 === "" && $errorinputSide3 === "" && $errorcolor === "") {
            function validateTriangle($sideA, $sideB, $sideC)
            {
                if ($sideA + $sideB <= $sideC || $sideA + $sideC <= $sideB || $sideB + $sideC <= $sideA) {
                    throw new Exception("Invalid triangle sides");
                } else {
                    return true;
                }
            }
            $triangle =  new Triangle($color);
            $triangle->setSide1($inputSide1);
            $triangle->setSide2($inputSide2);
            $triangle->setSide3($inputSide3);
            $side1 = $triangle->getSide1();
            $side2 = $triangle->getSide2();
            $side3 = $triangle->getSide3();
            try {
                if (validateTriangle($side1, $side2, $side3)) {
                    $message = $triangle->__toString();
                    $perimeter = "My Perimeter is: " . $triangle->getPerimeter();
                    $area = "My Area is: " .  $triangle->getArea();
                }
            } catch (Exception $e) {
                $message = $e->getMessage();
            }
        }
    }
    ?>
    <form method="post">
        <h1>Triangle calculator</h1>
        <input type="text" name="side1" placeholder="enter the side 1">
        <span><?php echo $errorinputSide1 ?></span><br>
        <input type="text" name="side2" placeholder="enter the side 2">
        <span><?php echo $errorinputSide2 ?></span><br>
        <input type="text" name="side3" placeholder="enter the side 3">
        <span><?php echo $errorinputSide3 ?></span><br>
        <input type="text" name="color" placeholder="enter the color">
        <span><?php echo $errorcolor ?></span><br>
        <input type="submit" value="Solve"><br>

        <span><?php echo $message ?></span><br>
        <span><?php echo $perimeter; ?></span><br>
        <span><?php echo $area; ?></span>
    </form>
</body>

</html>