<?php
include_once 'class/MyCircle.php';
include_once 'class/MyCylinder.php';

$circle = new MyCircle('circle-02', 'red', 5);
$circle->show();
echo $circle->calculateArea() . '<br>';
echo $circle->calculatePerimeter() . '<br>';

$cylinder = new MyCylinder('cylinder-02', 'blue', 5, 10);
$cylinder->show();
echo $cylinder->calculateArea() . '<br>';
echo $cylinder->calculateVolume() . '<br>';