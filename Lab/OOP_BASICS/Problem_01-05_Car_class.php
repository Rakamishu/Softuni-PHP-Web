<?php

class Car
{
    private $brand;
    private $model;
    private $year;
    private $details;
    
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
        $this->details = new Details();
    }
    
    public function setYear($year)
    {
        if(is_numeric($year) && strlen($year) == 4){
            $this->year = $year;
        }
    }
    
    public function setDetails($engine, $seats, $horsepower)
    {
        $this->details->setEngine($engine);
        $this->details->setSeats($seats);
        $this->details->setHorsepower($horsepower);
    }
    
    public function getDetails()
    {
        return $this->details->getDetails();
    }
    
    public function getBrand()
    {
        return $this->brand;
    }
    
    public function getModel()
    {
        return $this->model;
    }
    
    public function getYear()
    {
        return $this->year;
    }
        
    public function getData()
    {
        return $data[] = [$this->getBrand(), $this->getModel(), $this->getYear(), $this->getDetails()];
    }
    
}

class Details
{
    private $engine;
    private $seats;
    private $horsepower;
        
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }
    
    public function setSeats($seats)
    {
        $this->seats = $seats;
    }
    
    public function setHorsepower($horsepower)
    {
        $this->horsepower = $horsepower;
    }
    
    public function getDetails()
    {
        return $data[] = [$this->engine, $this->seats, $this->horsepower];
    }
}

$nissan = new Car("Nissan", "x-trail");
$nissan->setYear(2007);
$nissan->setDetails("Turbo GT 3.0", 4, 1800);

var_dump($nissan->getData());