<?php
include_once('Circle.php');
class Cylinder extends Circle
{
    private $height;
    private $volume;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    public function calculateVolume()
    {
        return $this->area * $this->height;
    }
}
