<?php

class Cat extends Felime
{
    private $breed;
    
    public function __construct(string $animal_type, string $animal_name, float $animal_weight, string $animal_living_region, string $breed) {
        $this->setBreed($breed);
    }
    
    private function setBreed($breed) {
        $this->breed = $breed;
    }
    
    public function makeSound() {
        echo "Meowwww";
    }

    public function eatFood(\Food $food) {
        $this->foodEaten = $food->getQuantity();
    }
    
    public function __toString() {
        return $this->animalType.'['.$this->animalName.', '.$this->breed.', '.$this->animalWeight.', '.$this->livingRegion.', '.$this->foodEaten.']'; 
    }

}