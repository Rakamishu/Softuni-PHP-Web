<?php
/**
 * Write a new filtering function and store it in the variable $youngDogs. 
 * Filter all dogs younger than 11 years. 
 */

$animals = [
  [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
  [ 'name' => 'Fluffy',  'type' => 'cat', 'age'  => 14],
  [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
  [ 'name' => 'Hank'      , 'type' => 'dog', 'age'  => 11],
];


$youngDogs = function ($animals){    
    return array_filter(
        $animals, 
        function($animals){
            $arr = [];
            if($animals['type'] == 'dog' && $animals['age'] < 11)
            {
                $arr = [
                    'name' => $animals['name'],
                    'type' => $animals['type'],
                    'age' => $animals['age'],
                ];
            }
            return $arr;
        }
    );
};

print_r($youngDogs($animals));