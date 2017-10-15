<?php

$animals = [
  [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
  [ 'name' => 'Fluffy',  'type' => 'cat', 'age'  => 14],
  [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
  [ 'name' => 'Hank'      , 'type' => 'dog', 'age'  => 11],
];

$youngDogs = function ($animals){
    for($i = 0; $i < count($animals); $i++)
    {
        if($animals[$i]['type'] == 'dog' && $animals[$i]['age'] >= 10)
        {
            echo 'unset'.$animals[$i]['age'];
            unset($animals[$i]);
        }
    }
    return $animals;
};

$oldDogs = function ($animals){
    for($i = 0; $i < count($animals); $i++)
    {
        if($animals[$i]['type'] == 'dog' && $animals[$i]['age'] < 10)
        {
            unset($animals[$i]);
        }
    }
    return $animals;
};


$filterDogs = function ($str) use ($oldDogs, $youngDogs, $animals){
    if($str == "old")
    {
        return $oldDogs($animals);
    }
    else
    {
        return $youngDogs($animals);
    }
};


$dogsOutput = $filterDogs('young');


var_dump($dogsOutput);

