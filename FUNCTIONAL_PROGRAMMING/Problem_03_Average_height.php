<?php

$people = [
  ['name'=> 'John'  , 'height'=> 1.65],
  ['name'=> 'Peter' , 'height'=> 1.85],
  ['name'=> 'Silvia', 'height'=> 1.69],
  ['name'=> 'Martin', 'height'=> 1.82]
];


function array_average($array) {
    $carry = null;
    $count = count($array);
    return array_reduce($array, function ($carried, $value) use ($count) {
         return $carried + $value/$count;
    },$carry);
}

$averageHeight = array_average(array_column($people,"height"));

echo "Average height is: ".$averageHeight;
