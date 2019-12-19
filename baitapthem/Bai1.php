<?php
function reverseArray($arr)
{
    if (empty($arr)) {
        return [];
    }

    if (count($arr) === 1) {
        return $arr;
    }

    $stack = new SplStack();
    for ($i = 0; $i < count($arr); $i++) {
        $stack->add($i, $arr[$i]);
    }

    $arrResult = [];
    while (count($stack) > 0) {
        array_push($arrResult, $stack->pop());
    }
    return $arrResult;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
var_dump(reverseArray($arr));
