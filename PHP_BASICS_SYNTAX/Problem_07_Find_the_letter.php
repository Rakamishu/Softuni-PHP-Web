<?php

$line1 = "Programming is awesomse!";
$line2 = "m 3";

list($letter, $num) = explode(" ", $line2);

$occurances = 0;
$pos = 0;

$line1_letters = str_split($line1);
$line1_len = strlen($line1);

for($i = 0; $i < $line1_len; $i++)
{    
    if($line1_letters[$i] == $letter)
    {
        $occurances++;
        $pos = $i;
    }
    if($num == $occurances)
    {
        break;
    }
}

if($occurances != $num)
{
    echo "Find the letter yourself!";
}
else 
{
    echo $pos;
}
