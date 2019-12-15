<?php
class Circle
{
    private $radius;
    private $color;
    private $area;
    function __get($name)
    {
        return $this->$name;
    }
    function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
        $this->area = $this->calculateArea();
    }
    public function calculateArea()
    {
        return pow($this->radius, 2) * pi();
    }
}
