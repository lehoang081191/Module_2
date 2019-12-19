<?php
function isFA($queue1, $queue2)
{
    while (!$queue1->isEmpty() && !$queue2->isEmpty()) {
        echo  "<br>" . "Mr." . $queue1->shift() . " and Mrs." . $queue2->shift();
    }
    echo "<br>";

    if (!$queue1->isEmpty()) {
        echo "Mr." . $queue1->shift() . " FA";
    } else if (!$queue2->isEmpty()) {
        echo "Mrs." . $queue2->shift() . " FA";
    }
}

$male = new SplQueue();
$male->push('Tân');
$male->push('Hữu');
$male->push('Đông');
$male->push('Nguyên');
$male->push('Trí');
$male->push('Hiếu');

$female = new SplQueue();
$female->push('Châu');
$female->push('Ngọc');
$female->push('Tiến');
$female->push('Phượng');
$female->push('Tú');

isFA($male, $female);
