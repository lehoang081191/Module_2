<?php
include_once("Mylist.php");
$list = new Mylist();
$list->push('Code');
$list->push('Gym');
$list->push('Hoàng');
var_dump($list);
var_dump($list);
$list->add(2, 'Array List Test');
$list->addFirst('Practice');
