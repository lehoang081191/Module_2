<?php
include_once('Node.php');
class MylinkedList {
    private $head;
    private $tail;
    private $numNode;
    public function __construct(){
        $this->numNode = 0;
    }
    public function add(int $int, $element){
    }
    public function addFirst($element) {
        $link = new Node($element);
        $link->next = $this->head;
        $this->head = $link;
    }
    public function addLast($element){
    }
    public function remove($index){
    }
    public function size() {
        return count($this->size());
    }
}
?>