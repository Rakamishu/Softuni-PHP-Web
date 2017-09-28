<?php

$input = "0 1 1 5 2 2 6 3 3";
$explode = explode(" ", $input);
$count = array_count_values($explode);


$start = 0;
$max_seq = 1;

foreach($count as $sequence => $occurance)
{
    if($occurance > $start)
    {
        $start = $occurance;
        $max_seq = $sequence;
    }
}
echo str_repeat($max_seq." ", $sequence);

