<?php
class Shape {
    private $name;
    public function __construct(string $_color)
    {
        $this->color = $_color;
    }
    public function show(){
        return "I am a triangle. My color is $this->color ";
    }
}
