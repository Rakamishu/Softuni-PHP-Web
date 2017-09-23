<?php

$input = "Learning PHP is FUN!";
$input = str_replace(' ', '', $input);
$input = strtolower($input);
$input = str_split($input);

$count = array_count_values($input);

var_export($count);