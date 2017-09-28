<?php

$input = 'Hello, there! ';

$repeatString = function($string, $n){
    return str_repeat($string, $n);
};

echo $repeatString($input, 3);