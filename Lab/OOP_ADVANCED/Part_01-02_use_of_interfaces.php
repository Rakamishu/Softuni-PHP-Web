<?php

interface Area
{
    public function getSurface();
}

interface Circumference extends Area
{
    public function getCircumference();
}


class Circle implements Circumference
{
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function getSurface() 
    {
        echo 3.14 * pow($this->radius, 2);
    }
    
    public function getCircumference() {
        echo ($this->radius * 2) * 3.14;
    }
}

class Rectangle implements Area
{
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function getSurface() {
        echo $this->width * $this->height;
    }
}

$circle = new Circle(10);
$circle->getCircumference();
//
//$myRec = new Rectangle(15, 35);
//$myRec->getSurface();