<?php
include_once "ComparableCircle.php";
$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 12);
$circleThree = new ComparableCircle('circleThree', 4);
$test = $circleOne->compareTo($circleTwo);
echo ('Comparable: <br>');
echo $test; 