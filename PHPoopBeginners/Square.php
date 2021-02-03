<?php
require_once 'ShapeInterface.php';
class Square implements ShapeInterface
{
    public function draw() {
        return "We draw square<br>";
    }
    public function color() {}
    public function reDraw() {}
}