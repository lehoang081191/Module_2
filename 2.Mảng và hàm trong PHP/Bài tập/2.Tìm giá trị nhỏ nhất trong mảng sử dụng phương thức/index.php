<?php
$arr = [55, 10, 3, 41, 35, 8, 10, 26, 14, 28];
function findMin($arr)
{
    $index = 0;
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
            $index = $i;
        }
    }
    return $index;
}
$result = findMin($arr);
echo "Min arr index : $result";
