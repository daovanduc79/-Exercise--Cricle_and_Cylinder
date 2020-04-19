<?php


class MyCircle
{
    public $name;
    public $color;
    public $radius;

    public function __construct($name, $color, $radius)
    {
        $this->name = $name;
        $this->color =$color;
        $this->radius =$radius;
    }

    public function show() {
        echo 'circle name is '. $this->name . '<br>';
        echo 'circle color is '.$this->color. '<br>';
    }

    public function calculateArea()
    {
        return pi() * $this->radius ** 2;
    }

    public function calculatePerimeter() {
        return pi() * $this->radius * 2;
    }
}