<?php

include "Problem_02-03_Getters_Setters.php";

class Car extends Vehicle
{
    private $brand;
    private $model;
    private $year;
    
    public function __construct(int $numberDoors, string $color, string $brand, string $model, int $year) {
        parent::__construct($numberDoors, $color);
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
    
    public function paint($paint_color){
        parent::setColor($paint_color);
    }

}


$car = new Car(4, 'Red', 'Audi', 'A4', '2016');
$car->paint("green");
$car->setDoors(15);

print_r($car);