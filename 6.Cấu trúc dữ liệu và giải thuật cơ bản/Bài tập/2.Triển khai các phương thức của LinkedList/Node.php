<?php
class Node {
    public $data;
    public $next;
    public function __construct(object $data)
    {
     $this->data = $data;
     $this->next = null;   
    }
    public function getData():object{
        return $this->data;
    }
    public function readNode(){
        return $this->data;
    }
}