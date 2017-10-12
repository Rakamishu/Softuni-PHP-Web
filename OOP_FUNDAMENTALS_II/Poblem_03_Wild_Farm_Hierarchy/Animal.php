<?php

abstract class Animal
{
    private $animalName;
    private $animalType;
    private $animalWeight;
    private $foodEaten;
    
    public function __construct(string $animalName, string $animalType, double $animalWeight, int $foodEaten) 
    {
        $this->animalName($animalName);
        $this->setAnimalType($animalType);
        $this->setAnimalWeight($animalWeight);
        $this->setFoodEaten($foodEaten);
    }
    
    private function setAnimalName(string $animalName) {
        $this->animalName = $animalName;
    }

    private function setAnimalType(string $animalType) {
        $this->animalType = $animalType;
    }

    private function setAnimalWeight(float $animalWeight) {
        $this->animalWeight = $animalWeight;
    }

    private function setFoodEaten(int $foodEaten) {
        $this->foodEaten = $foodEaten;
    }

    public function makeSound()
    {
        echo "animal sound";
    }

    public function eatFood(Food $food)
    {
        $this->foodEaten = $food->quantity;
    }
    
}