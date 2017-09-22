<?php

$input = "0 1 1 5 2 2 6 3 3";
$explode = explode(" ", $input);
$count = count($explode);


$start = 0;
$len = 1;

for($i = 1; $i < $count; $i++)
{
    if($explode[$i] == $explode[$i - 1])
    {
        $len++;
    }
}