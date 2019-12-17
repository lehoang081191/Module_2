<?php
include_once('circle.php');
class Cylinder extends Circle
{
    private $height;
    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }
    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }
    public function resize($percent)
    {
        parent::resize($percent);
        $this->height *= sqrt($percent / 100);
    }
}
