<?php

class Truck
{
    private $fuelQuantity;
    private $fuelConsumption;
    private $result = "";
    
    public function __construct($fuelQuantity, $fuelConsumption) {
        $this->setFuelConsumption($fuelConsumption);
        $this->setFuelQuantity($fuelQuantity);
    }
    
    function setFuelQuantity($fuelQuantity) {
        $this->fuelQuantity = $fuelQuantity;
    }

    function setFuelConsumption($fuelConsumption) {
        $this->fuelConsumption = $fuelConsumption + 1.6;
    }
    
    function refuel ($quantity)
    {
        $this->fuelQuantity = ($this->fuelQuantity + $quantity) * 0.95;
    }
    
    function drive ($km)
    {
        $needFuel = $this->fuelConsumption * $km;
        if ($needFuel < $this->fuelQuantity) {
            $this->traveledKilometers += $km;
            $this->result = "Car travelled {$km} km";
            $this->fuelQuantity -= $needFuel;
        } else {
            $this->result = "Car needs refueling";
        }
    }
    
    public function __toString() {
        return $this->result;
    }
    
    function getFuelQuantity() {
        return $this->fuelQuantity;
    }
    
    public function getFuel()
    {
        return number_format($this->fuelQuantity, 2, '.', '');
    }
}
