<?php

$input = array(1375, 50000);
$desireThickness = $input[0];

for ($i = 1; $i < count($input); $i++)
{
    $startingThikness = trim($input[$i]);
    echo "Processing chunk {$startingThikness} microns<br />";
    $counter = 0;
    
    while ($startingThikness / 4 >= $desireThickness) 
    {
        $startingThikness /= 4; 
        $counter++;
    }
    
    if ($counter != 0) 
    {  
        echo "Cut x{$counter}<br />";
        echo "Transporting and washing<br />";
        $counter = 0; 
    }
    
    $startingThikness = floor($startingThikness);
    
    while (($startingThikness * 0.8) >= $desireThickness) 
    {
        $startingThikness *= 0.8;
        $counter++;
    }
    
    if ($counter != 0) 
    {
        echo "Lap x{$counter}<br />";
        echo "Transporting and washing<br />";
        $counter = 0;
        $startingThikness = floor($startingThikness);
    }
    
    while ($startingThikness - 20 >= $desireThickness) 
    {
        $startingThikness -= 20;
        $counter++;
    }
    
    if ($counter != 0) 
    {
        echo "Grind x{$counter}<br />";
        echo "Transporting and washing<br />";
        $counter = 0;
        $startingThikness = floor($startingThikness);
    }
    
    while ($startingThikness - 1 >= $desireThickness) 
    {
        $startingThikness -= 2;
        $counter++;
    }
    
    if ($counter != 0) {
        echo "Etch x{$counter}<br />";
        echo "Transporting and washing<br />";
        $counter = 0;
        $startingThikness = floor($startingThikness);
    }
    
    if ($startingThikness == $desireThickness - 1)
    {
        echo "X-ray x1<br />";
        $startingThikness += 1;
    }
    
    echo "Finished crystal {$startingThikness} microns<br />";
}