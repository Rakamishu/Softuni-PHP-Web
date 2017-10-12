<?php

class Car 
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
        $this->fuelConsumption = $fuelConsumption + 0.9;
    }

    function refuel ($quantity)
    {
        $this->setFuelQuantity($this->fuelQuantity + $quantity);
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
    
    public function getFuel()
    {
        return number_format($this->fuelQuantity, 2, '.', '');
    }
    
    public function __toString() {
        return $this->result;
    }
    
    function getFuelQuantity() {
        return $this->fuelQuantity;
    }


}
