<?php
class Mylist
{
    private $arrList;
    private $size;
    public function __construct()
    {
        $this->arrList = [];
        $this->size = 0;
    }
    public function add(int $index, $element)
    {
        $newArray = [];
        if ($index <  0 || $index >= $this->size()) {
            throw new Exception("Out of range");
        } else {
            foreach ($this->arrList as $key => $value) {
                $newArray[$key] = $value;
                if ($key === $index) {
                    $newArray[$key] = $element;
                    break;
                }
            }
            for ($i = $index; $i < $this->size(); $i++) {
                $newArray[$i + 1] = $this->arrList[$i];
            }
        }
        return $this->arrList = $newArray;
    }
    public function push($value)
    {
        $this->arrList[] = $value;
    }
    public function addFirst($value)
    {
        array_unshift($this->arrList, $value);
    }
    public function remove($index)
    {
        if ($index <  0 || $index >= $this->size()) {
            throw new Exception("Out of range");
        } else {
            $newArray = [];
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index === $i) {
                    continue;
                }
                $newArray[$i] = $this->arrList[$i];
                break;
            }
            for ($j = $index; $j < $this->size() - 1; $j++) {
                $newArray[$j] = $this->arrList[$j + 1];
            }
            return $this->arrList = $newArray;
        }
    }
    public function size()
    {
        return count($this->arrList);
    }
    public function clone()
    {
        if ($this->size() <= 0) {
            throw new Exception('Out of bounds');
        } else {
            $newArray =  [];
            foreach ($this->arrList as $value) {
                $newArray[] = $value;
            }
        }
        return $newArray;
    }
    public function contains($element)
    {
        foreach ($this->arrList as $value) {
            if ($value === $element) {
                return true;
            }
        }
        return false;
    }
    public function indexOf($element)
    {
        if ($this->contains($element)) {
            foreach ($this->arrList as $key => $value) {
                if ($value === $element) {
                    return $key;
                }
            }
        }
    }
    public function get(int $index)
    {
        if ($index <  0 || $index >= $this->size()) {
            throw new Exception("Out of range");
        } else {
            return $this->arrList[$index];
        }
    }
    public function clear()
    {
        $this->arrList = [];
    }
}
