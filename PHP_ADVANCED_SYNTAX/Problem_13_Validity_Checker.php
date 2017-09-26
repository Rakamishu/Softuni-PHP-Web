<?php

$input = "3, 0, 0, 4";
$coords = explode(", ", $input);

list($x1, $y1, $x2, $y2) = $coords;

function check_validity($x1, $y1, $x2, $y2)
{
    $distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    if($distance == intval($distance))
    {
        echo '{'.$x1.', '.$y1.'} to {'.$x2.', '.$y2.'} is valid';
    }
    else
    {
        echo '{'.$x1.', '.$y1.'} to {'.$x2.', '.$y2.'} is invalid';
    }
}


check_validity($x1, $y1, 0, 0);
echo '<br />';
check_validity($x2, $y2, 0, 0);
echo '<br />';  
check_validity($x1, $y1, $x2, $y2);