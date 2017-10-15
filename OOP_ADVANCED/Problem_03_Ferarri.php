<?php

interface Car
{
    public function model();
    public function brakes();
    public function gas();
    public function driver(string $driver);
}

class Ferarri implements Car
{
    
    public function __construct(string $driver) {
        $this->driver($driver);
    }
    
    public function model() {
        return "488-Spider";
    }
        
    public function brakes() {
        return "Brakes!";
    }
    
    public function gas() {
        return "Zadu6avam sA!";
    }
    
    public function driver(string $driver) {
        $this->driver = $driver;
    }
    
    public function __toString() {
        return $this->model().'/'.$this->brakes().'/'.$this->gas().'/'.$this->driver;
    }
}

$driver = trim(fgets(STDIN));

$car = new Ferarri($driver);
echo $car;