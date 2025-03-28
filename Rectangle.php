<?php

class Rectangle 
{
    public $width;
    public $height;

    public function getSquare() {
        return $this->width *  $this->height;
    }
    public function getPerimeter() {
        return 2* ($this->width +  $this->height);
    }
}


$rectangle = new Rectangle;

$rectangle->width = 10;
$rectangle->height = 20;

echo($rectangle->getSquare() . PHP_EOL);
echo($rectangle->getPerimeter(). PHP_EOL);