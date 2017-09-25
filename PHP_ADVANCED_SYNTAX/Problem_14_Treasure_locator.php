<?php

$input = "4, 2, 1.5, 6.5, 1, 3";
$data = explode(", ", $input);

$treasures = array_chunk($data, 2);

foreach ($treasures as $treasure)
{
    $x = $treasure[0];
    $y = $treasure[1];
    
    if($x >= 1 && $x <= 3 && $y >= 1 && $y <= 3)
    {
        echo 'Tuvalu<br>';
    }
    else if($x >= 8 && $x <= 9 && $y >= 0 && $y <= 1)
    {
        echo 'Tokelau<br>';
    }
    else if($x >= 5 && $x <= 7 && $y >= 3 && $y <= 6)
    {
        echo 'Samoa<br>';
    }
    else if($x >= 0 && $x <= 2 && $y >= 6 && $y <= 8)
    {
        echo 'Tonga<br>';
    }
    else if($x >= 4 && $x <= 9 && $y >= 7 && $y <= 8)
    {
        echo 'Cook<br>';
    }
    else 
    {
        echo 'On the bottom of the ocean<br>';
    }
}