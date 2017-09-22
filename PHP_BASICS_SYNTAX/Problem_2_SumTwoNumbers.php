<?php

$firstNumber = $_GET['a'];
$secondNumber = $_GET['b'];

if(!empty($firstNumber) && !empty($secondNumber))
{
    echo round(($firstNumber + $secondNumber), 2);
}
