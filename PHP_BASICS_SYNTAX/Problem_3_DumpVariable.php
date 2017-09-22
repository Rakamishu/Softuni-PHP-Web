<?php

//$var = "hello";
//$var = 15;
$var = 1.234;
//$var = array(1,2,3);
//$var = (object)[2,34];

if(is_numeric($var))
{
    var_dump($var);
}
else 
{
    echo gettype($var);
}