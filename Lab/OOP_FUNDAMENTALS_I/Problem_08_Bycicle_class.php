<?php

include "Problem_02-03_Getters_Setters.php";

class Bycicle extends Vehicle
{
    private $brand;
    private $model;
    private $year;
    private $forSkirt;
    private $rideMode;
    
    public function __construct(int $numberDoors, string $color, string $brand, string $model, int $year, bool $forSkirt = false) {
        parent::__construct(0, $color);
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->forSkirt = $forSkirt ? "yes" : "no";
    }
    
    public function __toString() {
        $html = "<table border=1>";
        $html .= "<tr><td>Color</td><td>".$this->getColor()."</td></tr>";
        $html .= "<tr><td>Brand</td><td>".$this->brand."</td></tr>";
        $html .= "<tr><td>Model</td><td>".$this->model."</td></tr>";
        $html .= "<tr><td>Year</td><td>".$this->year."</td></tr>";
        $html .= "<tr><td>forSkirt</td><td>".$this->forSkirt."</td></tr>";
        $html .= "</table>";
        return $html;
    }
    
    public function setRideMode(bool $b)
    {
        $this->rideMode = $b;
    }
    
    public function getRideMode()
    {
        return $this->rideMode ? "yes" : "no";
    }
    
}

$bycicle = new Bycicle(0, "black", "Verenti", "Substance Sora", 2017, false);
echo $bycicle;

$bycicle->setRideMode(true);
echo 'Someone rides the bike? '.$bycicle->getRideMode();