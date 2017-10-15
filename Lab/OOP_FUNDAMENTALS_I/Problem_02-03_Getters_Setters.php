<?php

class Vehicle
{
    private $numberDoors;
    private $color;
    
    public function __construct(int $numberDoors, string $color) {
        $this->setDoors($numberDoors);
        $this->setColor($color);
    }   
    
    protected function setDoors(int $numberDoors) #Problem 7.	Protecting the Number of Doors Setter
    {
        $this->numberDoors = $numberDoors;
    }
    
    protected function setColor(string $color) #Problem 7.	Protecting the Number of Doors Setter
    {
        $this->color = $color;
    }
    
    public function getDoors()
    {
        return $this->numberDoors;
    }
    
    public function getColor()
    {
        return $this->color;
    }

    public function __set($name, $value) {
        $this->{$name} = $value;
    }
    
    public function __get($name) {
        return $this->{$name};
    }
    
    #Problem 3.	Add a paint method to Vehicle
    private function paint($color)
    {
        $this->setColor($color);
    }
}


//zakomentiran za6toto 6te includevam faila za sledva6tata zada4a
//
//$myVehicle = new Vehicle(2, "orange");
//$myVehicle->setDoors(4);
//echo 'Get number of doors: <br />'.$myVehicle->getDoors();
//
//echo "<hr />";
//
//$myVehicle->__set("setDoors", 4);
//echo 'Get number of doors: <br />'.$myVehicle->__get("setDoors");
//
//echo "<hr />";
//#Problem 3.	Add a paint method to Vehicle
//
//$myVehicle->setColor("blue");
//echo 'Paint $myVehicle in blue: <br />'.$myVehicle->getColor();
//echo "<hr />";
//print_r($myVehicle);