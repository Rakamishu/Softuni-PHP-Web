<?php

class Vegetable Extends Food
{
    private $foodType = "Vegetable";
    
    public function getFoodType()
    {
        return $this->foodType;
    }
}