<?php
include_once 'MyCircle.php';

class MyCylinder extends MyCircle
{
    public $height;

    public function __construct($name, $color, $radius, $height)
    {
        parent::__construct($name, $color, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + $this->calculatePerimeter() * $this->height;
    }

    public function calculateVolume()
    {
        return $this->calculateArea() * $this->height;
    }
}