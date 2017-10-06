<?php

class Vehicle
{
    private $numberDoors;
    private $color;
    
    public function __construct(int $numberDoors, string $color) {
        $this->numberDoors = $numberDoors;
        $this->color = $color;
    }   
    
    
}

$myVehicle = new Vehicle(2, "orange");

print_r($myVehicle);