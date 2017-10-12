<?php

class Mammal extends Animal
{
    private $livingRegion;
    
    public function __construct(string $livingRegion) 
    {
        $this->setLivingRegion($livingRegion);
    }
    
    function setLivingRegion($livingRegion) {
        $this->livingRegion = $livingRegion;
    }

    public function __toString() {
        return $this->animalType.'['.$this->animalName.', '.$this->animalWeight.', '.$this->livingRegion.', '.$this->foodEaten.']'; 
    }
}