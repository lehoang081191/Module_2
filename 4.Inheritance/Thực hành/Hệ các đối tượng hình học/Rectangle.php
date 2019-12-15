<?php
include_once('Shape.php');

class Rectangle extends Shape
{
    public $weight;
    public $height;

    public function __construct($name, $weight, $height)
    {
        parent::__construct($name);
        $this->weight = $weight;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->height * $this->weight;
    }

    public function calculatePerimeter()
    {
        return ($this->weight + $this->height) * 2;
    }
}
