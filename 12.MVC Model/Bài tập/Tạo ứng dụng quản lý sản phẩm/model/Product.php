<?php

namespace Model;

class Product
{
    public $id;
    public $productName;
    public $price;
    public $description;
    public $producer;

    public function __construct($productName, $price, $description, $producer)
    {
        $this->productName = $productName;
        $this->price = $price;
        $this->description = $description;
        $this->producer = $producer;
    }
}
