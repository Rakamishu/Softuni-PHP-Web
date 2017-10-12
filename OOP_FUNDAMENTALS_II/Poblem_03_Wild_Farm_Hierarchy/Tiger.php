<?php

class Tiger extends Felime
{
    public function eatFood(Food $food) {
        if($food->getFoodType != "Meat")
        {
            echo "Tiger are not eating that type of food!";
        }
        else
        {
            $this->foodEaten = $food->quantity;
        }
    }
    
    public function makeSound() {
        echo "SQUEEEAAAK!";
    }
}