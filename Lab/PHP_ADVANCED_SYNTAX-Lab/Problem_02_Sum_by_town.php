<?php

$input = "Plovdiv, 40, Pernik, 20, Vidin, 8, Sliven, 44, Plovdiv, 1, Vidin, 7, Chirpan, 0";

$data = explode(", ", $input);
$towns = array_chunk($data, 2);

$unique = [];

foreach($towns as $town)
{
    $name = $town[0];
    if(isset($unique[$name]))
    {
        $unique[$name][1] += $town[1];
    }
    else
    {
        $unique[$name] = $town;        
    }    
}

$unique = array_values($unique);

$html = "";
foreach($unique as $result)
{
    $html .= '"'.$result[0].'" => "'.$result[1].'",';
}
echo '['.substr($html, 0, -1).']';