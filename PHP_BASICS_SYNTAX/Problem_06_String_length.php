<?php

//$input = fgets(STDIN);
$input = "PHP";
$input_lenght = strlen($input);

$asterisks = 20 - $input_lenght;
if($asterisks <= 0){
    $asterisks = 0;
}

echo $input.str_repeat("*", $asterisks);
