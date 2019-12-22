<?php
include_once "Shape.php";
class Triangle extends Shape
{
    private $side1;
    private $side2;
    private $side3;
    public function __construct($_color)
    {
        parent::__construct($_color);
        $this->side1 = 1;
        $this->side2 = 1;
        $this->side3 = 1;
    }
    public function getSide1(): float
    {
        return $this->side1;
    }
    public function getSide2(): float
    {
        return $this->side2;
    }
    public function getSide3(): float
    {
        return $this->side3;
    }
    public function setSide1($newside1)
    {
        $this->side1 = $newside1;
    }
    public function setSide2($newside2)
    {
        $this->side2 = $newside2;
    }
    public function setSide3($newside3)
    {
        $this->side3 = $newside3;
    }
    public function getPerimeter(): float
    {
        $perimeter = $this->side1 + $this->side2 + $this->side3;
        return $perimeter;
    }
    public function getArea(): float
    {
        $semiperimeter = $this->getPerimeter() / 2;
        $area = sqrt($semiperimeter * ($semiperimeter - $this->side1) * ($semiperimeter - $this->side2) * ($semiperimeter - $this->side3));
        return $area;
    }
    public function __toString()
    {
        $info = parent::show();
        return "$info My side 1 = $this->side1, side 2 = $this->side2, side 3= $this->side3";
    }
}
