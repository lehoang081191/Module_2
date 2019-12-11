<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <form action="" method="post">
        <select name="draw" id="">
            <option value="rectangle">Print the rectangle</option>
            <option value="squaretriangle">Print the square triangle</option>
            <option value="isoscelestriangle">Print isosceles triangle</option>
        </select>
        <button type="submit">Draw</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $indraw = $_POST["draw"];
        //    var_dump($indraw);
    }
    class DrawInput
    {
        public $indraw;
        function __construct($indraw)
        {
            $this->indraw = $indraw;
        }
        function drawRectangle()
        {
            for ($i = 0; $i < 3; $i++) {
                echo "<br>";
                for ($j = 0; $j < 7; $j++) {
                    echo "*  ";
                }
            }
        }
        function drawSquaretriangle()
        {
            for ($i = 0; $i <= 5; $i++) {
                echo "<br>";
                for ($j = 0; $j < $i; $j++) {
                    echo "*  ";
                }
            }
        }
        function isoscelestriangle()
        {
            for ($i = 4; $i >= 0; $i--) {
                echo "<br>";
                for ($j = 0; $j <= $i; $j++) {
                    echo "*  ";
                }
            }
        }
        function draw()
        {
            if ($this->indraw == "squaretriangle") {
                $this->drawSquaretriangle();
            } else if ($this->indraw == "rectangle") {
                $this->drawRectangle();
            } else if ($this->indraw == "isoscelestriangle") {
                $this->isoscelestriangle();
            }
        }
    }
    $vehinh = new DrawInput($indraw);
    $vehinh->draw();
    ?>
</body>

</html>