<?php

$input = "-1, -2, 3.5, 0, 0, 2";
$coords = explode(", ", $input);

list($x1, $y1, $x2, $y2, $x3, $y3) = $coords;

$distance_1_2 = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));
$distance_1_3 = sqrt(pow(($x3 - $x1), 2) + pow(($y3 - $y1), 2));
$distance_2_3 = sqrt(pow(($x3 - $x2), 2) + pow(($y3 - $y2), 2));

if($distance_1_2 <= $distance_1_3 && $distance_1_3 >= $distance_2_3)
{
    echo '1->2->3: '.($distance_1_2 + $distance_2_3);
}
else if($distance_1_2 <= $distance_2_3 && $distance_1_3 < $distance_2_3)
{
    echo '2->1->3: '.($distance_1_3 + $distance_1_2);
}
else 
{
    echo '1->3->2: '.($distance_2_3 + $distance_1_3);
}