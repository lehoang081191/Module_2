<?php
include_once('Rectangle.php');

class Square extends Rectangle
{
    public function __construct($name, $weight)
    {
        parent::__construct($name, $weight,$weight,$weight);
    }
}
