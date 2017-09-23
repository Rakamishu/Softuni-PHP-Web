<?php

$input = "2 1 1 2 3 3 2 2 2 1";
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

