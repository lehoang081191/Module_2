<form method="post">
    <input type="text" name="array" placeholder="enter the value of array"><br>
    <input type="text" name="delvalue" placeholder="enter the value to delete"><br>
    <input type="submit">
    ​
</form>
​
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $arr = $_POST['array'];
    $delvalue = $_POST['delvalue'];
    function test_input($data)
    {
        if (preg_match("/^[0-9 ,]*$/", $data)) {
            return $data;
        } else {
            return false;
        }
    }
    $arr = explode(",", trim($arr));
    $delvalue = trim($delvalue);
    $result;
    $index;
    if (test_input($delvalue) === false) {
        echo "wrong input";
    } else {
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == $delvalue) {
                $index = $i;
            }
        }
        for ($i = $index; $i < count($arr); $i++) {
            $arr[$i] = $arr[$i + 1];
        }
        $arr[count($arr)-1]=0;
    }
    print_r($arr);
}
?>