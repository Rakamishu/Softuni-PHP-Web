<?php

$number = "5830";
$digits = str_split($number);
$count = count($digits);

while(array_sum($digits) / $count < 5)
{
    array_push($digits, 9);
    $count++;
}


foreach($digits as $d)
{
    echo $d;
}