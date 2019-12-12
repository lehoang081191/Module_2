<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table style="width:20%">
        <form method="POST">
            <input name="input" type="text" placeholder="Nhập độ dài của mảng">
            <input type="submit" value="click">
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $arr = array();
            $lenght = (int) $_POST["input"];
            $sum = 0;
            function test_input($data)
            {
                if (preg_match("/^[0-9]*$/", $data)) {
                    return $data;
                } else {
                    return false;
                }
            }
            if (test_input($lenght) === false) {
                echo "wrong input";
            } else {
                for ($i = 0; $i < $lenght; $i++) {
                    for ($j = 0; $j < $lenght; $j++) {
                        $arr[$i][$j] = mt_rand(1, 100);
                    }
                }
                foreach ($arr as $item) {
                    echo "<tr>";
                    foreach ($item as $value) {
                        echo "<td>" . $value . "</td>";
                    }
                    echo "</tr>";
                }
                for ($i = 0; $i < count($arr); $i++) {
                    for ($j = 0; $j < count($arr[$i]); $j++) {
                        if ($i === $j) {
                            $sum += $arr[$i][$j];
                        }
                    }
                }
        }
        ?>
    </table>
    <?php
    echo "sum: " . $sum;
}
    ?>
</body>

</html>