<?php

//$a = intval(fgets(STDIN));
//$b = intval(fgets(STDIN));
$a = $_GET['a'];
$b = $_GET['b'];

for($i = min($a, $b); $i <= max($a, $b); $i++)
{
    echo $i."\n";
}