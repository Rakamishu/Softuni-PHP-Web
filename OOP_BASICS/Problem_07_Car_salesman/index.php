<?php

include "Car.php";
include "Engine.php";

$engines = [];
$cars = [];

$engines_num = trim(fgets(STDIN));

for($i = 0; $i < $engines_num; $i++)
{
    $input = explode(" ", trim(fgets(STDIN)));
    $input[2] = isset($input[2]) ? $input[2] : "n/a";
    $input[3] = isset($input[3]) ? $input[3] : "n/a";
    if(is_numeric($input[2]))
    {
        $input[2] = $input[2];
    }
    else 
    {
        $input[3] = $input[2];
        $input[2] = "n/a";
    }
    list($model, $power, $displacement, $efficiency) = $input;
    
    $engines[$model] = new Engine($model, $power, $displacement, $efficiency);
}

$cars_num = trim(fgets(STDIN));

for($i = 0; $i < $cars_num; $i++)
{
    $input = explode(" ", trim(fgets(STDIN)));
    $input[2] = isset($input[2]) ? $input[2] : "n/a";
    $input[3] = isset($input[3]) ? $input[3] : "n/a";
    
    if(is_numeric($input[2]))
    {
        $input[2] = $input[2];
    }
    else 
    {
        $input[3] = $input[2];
        $input[2] = "n/a";
    }
    list($model, $engine, $weight, $color) = $input;
    
    $cars[] = new Car($model, $engines[$engine], $weight, $color);
}

foreach($cars as $car)
{
    echo $car->model.":\n";
    echo '  '.$car->engine->model.":\n";
    echo '    Power: '.$car->engine->power."\n";
    echo '    Displacement: '.$car->engine->displacement."\n";
    echo '    Efficiency: '.$car->engine->efficiency."\n";
    echo '  Weight: '.$car->weight."\n";
    echo '  Color: '.$car->color."\n";
}