<?php

$people = [
  [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
  [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
  [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
  [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
];


function bmi($w, $h)
{
    return $w / ($h * $h);
}

$bmi = array_map (
    function($people){
        return bmi($people['weight'], $people['height']);
    }, $people
);

    
$bmiCalcAvg = function ($people){
    $bmiAvg = 0;
    $count = count($people);
    return end(array_map(
        function($people) use (&$bmiAvg, &$count){
            $bmiAvg += bmi($people['weight'], $people['height']) / $count;
            return $bmiAvg;
        }, $people
    ));
};


print_r($bmi);
echo '<hr />average BMI: '.$bmiCalcAvg($people);