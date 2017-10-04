<?php

class Car
{
    private $speed;
    private $fuel;
    private $fuel_economy;
    private $distance_traveled = 0;
    private $time_traveled = 0;
    private $mins_per_km = 0;
    private $fuel_per_km = 0;
    
    public function __construct(float $speed, float $fuel, float $fuel_economy) {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->fuel_economy = $fuel_economy;
        
        $this->mins_per_km = 60 / $this->speed;
        $this->fuel_per_km = $this->fuel_economy / 100;
    }
    
    public function travel(int $distance)
    {
        $required_fuel = $this->fuel_per_km * $distance;
        if ($required_fuel <= $this->fuel) {
            $this->fuel -= $required_fuel;
            $this->distance_traveled += $distance;
            $this->time_traveled += $distance * $this->mins_per_km;
        } else {
            $possible_distance = $this->fuel / $this->fuel_per_km;
            $this->distance_traveled += $possible_distance;
            $this->fuel = 0;
            $this->time_traveled += $possible_distance * $this->mins_per_km;
        }
    }
    public function reFuel(float $fuel)
    {
        $this->fuel += $fuel;
    }
    public function getDistance()
    {
        $formatted = number_format(round($this->distance_traveled, 1), 1);
        echo "Total Distance: {$formatted} \n";
    }
    public function getTime()
    {
        $hours = floor($this->time_traveled / 60);
        $minutes = floor($this->time_traveled % 60);
        echo "Total Time: {$hours} hours and {$minutes} minutes \n";
    }
    public function getFuel()
    {
        $formatted = number_format(round($this->fuel, 1), 1);
        echo "Fuel left: {$formatted} liters \n";
    }
    
}


$input = explode(" ", fgets(STDIN));
$speed = floatval($input[0]);
$fuel = floatval($input[1]);
$fuelEconomy = floatval($input[2]);
$car = new Car($speed, $fuel, $fuelEconomy);
while (true) {
    $commands = explode(" ", fgets(STDIN));
    if (trim($commands[0]) == "END") {
        break;
    } else if (trim($commands[0]) == "Travel") {
        $car->travel(floatval($commands[1]));
    } else if (trim($commands[0]) == "Refuel") {
        $car->reFuel(floatval($commands[1]));
    } else if (trim($commands[0]) == "Distance") {
        $car->getDistance();
    } else if (trim($commands[0]) == "Time") {
        $car->getTime();
    } else if (trim($commands[0]) == "Fuel") {
        $car->getFuel();
    }
}