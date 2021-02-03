<?php
require_once 'Circle.php';
require_once 'Square.php';
require_once 'Line.php';
class Painter
{
    public function addShape(ShapeInterface $shape) {
        return $shape->draw();
    } 
}

