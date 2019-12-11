<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Chuyển đổi tiền tệ</h1>

    <form action="" method="post">
        <input type="number" name="input" required>
        <select name="selectinput" id="">
            <option value="1">USD</option>
            <option value="23000">VND</option>
        </select>
        <select name="selectoutput" id="">
            <option value="1">USD</option>
            <option value="23000">VND</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Quy đổi">
        <br>
        <br>
    </form>

    <?php
    $arr = ["1" => "USD", "23000" => "VND"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["input"];

        $selectinput = $_POST["selectinput"];
        $selectoutput = $_POST["selectoutput"];
        if ($input == "" || $input == "e") {
            $result = "";
        } else {
            $result = ($input * $selectoutput) / $selectinput;
        }

        echo "Kết quả: " . $input . " " . $arr[$selectinput] . " = " . $result . " " . $arr[$selectoutput];
    }
    ?>
</body>

</html>