<?php

include 'Food.php';
include 'Animal.php';
include 'Mammal.php';
include 'Vegetable.php';
include 'Meat.php';
include 'Mouse.php';
include 'Felime.php';
include 'Zebra.php';
include 'Cat.php';
include 'Tiger.php';


$command = trim(fgets(STDIN));
$row = 1;

while($command != "END")
{
    $row++;
    
    if($row % 2 == 0)
    {
        $animal_info = explode(" ", $command);
        
        $animal_type = $animal_info[0];
        $animal_name = $animal_info[1];
        $animal_weight = $animal_info[2];
        $animal_living_region = $animal_info[3];
        
        if($animal_type == "Cat")
        {
            $cat_breed = $animal_info[4];
            $animal = new Cat($animal_type, $animal_name, floatval($animal_weight), $animal_living_region, $cat_breed);
        }
        elseif($animal_type == "Mouse")
        {
            $animal = new Mouse($animal_type, $animal_name, floatval($animal_weight), $animal_living_region);
        }
        elseif($animal_type == "Zebra")
        {
            $animal = new Zebra($animal_type, $animal_name, floatval($animal_weight), $animal_living_region);
        }
        elseif($animal_type == "Tiger")
        {
            $animal = new Tiger($animal_type, $animal_name, floatval($animal_weight), $animal_living_region);
        }
    }
    else
    {
        $food_info = explode(" ", $command);
        $food_type = $food_info[0];
        $food_quantity = $food_info[1];
        
        if($food_type == "Vegetable")
        {
            $food = new Food(intval($food_quantity));
        }
        elseif($food_type == "Meat")
        {
            $food = new Food(intval($food_quantity));
        }
        
        $animal->eatFood($food);
        $animal->makeSound().PHP_EOL;
        echo $animal.PHP_EOL;
    }
    $command = trim(fgets(STDIN));
}
