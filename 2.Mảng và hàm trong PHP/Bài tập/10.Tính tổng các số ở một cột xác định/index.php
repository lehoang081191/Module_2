<table style="width:20%">
    <form method="post">
        <input type="text" name="length" placeholder="Nhập độ dài của mảng"><br>
        <input type="text" name="column" placeholder="Nhập cột cần tính tổng"><br>
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $arr = array();
        $len = $_POST['length'];
        $column = $_POST['column'];
        $sum = 0;
        function test_input($data)
        {
            if (preg_match("/^[0-9]*$/", $data)) {
                return $data;
            } else {
                return false;
            }
        }
        if (test_input($len) === false) {
            echo "wrong input";
        } else {
            for ($i = 0; $i < $len; $i++) {
                for ($j = 0; $j < $len; $j++) {
                    $arr[$i][$j] = rand(1, 100);
                }
            }
            foreach ($arr as $item) {
                echo "<tr>";
                foreach ($item as $value) {
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            }
        }
        for ($i = 0; $i < $len; $i++) {
            $sum += $arr[$i][$column];
        }
        // echo "<br>";
        // echo "Sum number of column of array is: $sum";
    }
    ?>
</table>
<?php
// echo "<br>";
echo "Tổng của cột $column trong mảng là: $sum";
?>