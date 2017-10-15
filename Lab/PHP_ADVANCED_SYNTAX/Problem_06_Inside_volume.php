<?php

function isVol($x, $y, $z)
{
    if($x >= 10 && $x <= 50)
    { 
        if($y >= 20 && $y <= 80)
        {
            if($z >= 15 && $z <= 50)
            {
                return true;
            }
        }
    }
    return false;
}


$input = explode(", ",fgets(STDIN));
$inputNum = count($input);

for($i = 0; $i < $inputNum; $i +=3)
{
    $x = $input[$i];
    $y = $input[$i + 1];
    $z = $input[$i + 2];
    
    if(isVol($x, $y, $z))
    {
        echo "inside\n";
    }
    else 
    {
        echo "outside\n";
    }
}