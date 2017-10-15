<?php
/**
 * Write your own version of array_filter and store it in the variable $filter. 
 * Wrap all in a new function stored in $dogsOutput, invoke it and filter all young dogs less than 8 years using the new version of $youngDogs.
 */

$animals = [
  [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
  [ 'name' => 'Fluffy',  'type' => 'cat', 'age'  => 14],
  [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
  [ 'name' => 'Hank'      , 'type' => 'dog', 'age'  => 11],
];


$filter = function ($animals, $age){
    for($i = 0; $i < count($animals); $i++)
    {
        if($animals[$i]['type'] == 'dog' && $animals[$i]['age'] >= $age)
        {
            unset($animals[$i]);
        }
    }
    return $animals;
};

$dogsOutput = $filter($animals, 10);


print_r($dogsOutput);

