<?php
/**
 * Add an argument to $youngDogs which should specify which dog should be considered as young. 
 * Then change your array_filter code and filter dogs less than 9.
 */

$animals = [
  [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
  [ 'name' => 'Fluffy',  'type' => 'cat', 'age'  => 14],
  [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
  [ 'name' => 'Hank'      , 'type' => 'dog', 'age'  => 11],
];


$youngDogs = function ($animals, $age){  
    return array_filter(
        $animals, 
        function($animals) use ($age){
            $arr = [];
            if($animals['type'] == 'dog' && $animals['age'] < $age)
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

print_r($youngDogs($animals, 9));