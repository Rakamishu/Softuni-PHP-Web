<?php

$input = "Ge, Ch, O, Ne, Nb, Mo, Tc, O, Ne, Ne";

$data = explode(", ", $input);
$count = array_count_values($data);
$uniqe = [];

foreach($count as $element => $num)
{
    if($num == 1)
    {
        $uniqe[] = $element;
    }
}

foreach($uniqe as $result)
{
    echo $result.' ';
}
