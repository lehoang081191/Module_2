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
    $array = array();
    while (count($array) < 100) {
        array_push($array, mt_rand(0, 99));
    };
    ?>
    <form method='post'>
        <div>
            <input type="text" name="index" placeholder='index' />
            <input type='submit' value='TÌM' />
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $index = $_POST['index'];
        $pattern = "/^[1-9]{1}\d*$/";
        try {
            if (!preg_match($pattern, $index)) {
                throw new Exception('Nhập vào phải là số nguyên');
            };
            if ($index < 0 || $index >= 100) {
                throw new Exception('Chỉ số vượt quá giới hạn của mảng');
            };
            echo "Giá trị của phần tử có chỉ số $index là $array[$index]";
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
        echo "<br/>";
        foreach ($array as $i => $value) {
            echo $value . ' ';
        };
    }
    ?>
</body>

</html>