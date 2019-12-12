<?php
$arr = [
    [1, 20, 3, 141, 23, 2, 46, 8, 9],
    [-4, 2, 3, 6, 9, 6, 4, 4, 2],
    [33, -2, 6, 75, 3, 2, 34, 13, 22],
    [10, 32, 51, 6, 7, 65, 4, 23, 2],
];
function findmax($arr)
{
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}
$result = findmax($arr);
echo "<br> So Lon Nhat La: $result";
