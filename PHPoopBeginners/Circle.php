<?php
require_once 'ShapeInterface.php';
class Circle implements ShapeInterface
{
    public function draw() {
        return "We draw circle<br>";
    }
    public function color() {}
    public function reDraw() {}
}