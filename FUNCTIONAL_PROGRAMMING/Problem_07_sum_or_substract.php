<?php

$input = [
    ['sum', 12, 13],
    ['substract', 3, 3],
    ['sum', 1, 3],
];

$opSum  = function ($a, $b) {
    return $a + $b;
};

$opSubstract = function ($a, $b){
    return $a - $b;
};

$opDivide = function ($a, $b){
    return ($b == 0) ? "divison_by_zero" : $a / $b;
};

$opError = function() {
    //
};

$simpleCalc = function (&$simpleCalc, $input, $i = 0, $output = []) use ($opSum, $opSubstract){
    if($i < count($input)){
        $op = $input[$i][0];
        $a = $input[$i][1];
        $b = $input[$i][2];
        if($a < 0 || $a > 100 || $b < 0 || $b > 100){
            $ouput[] = 'error';
        }
        else if($op == 'sum'){
            $output[] = $opSum($a, $b);
        }
        else if($op == "substract"){
            $output[] = $opSubstract($a, $b);
        }
        else if($op == "divide"){
            $output[] = $opDivide($a, $b);
        }
        return $simpleCalc($simpleCalc, $input, $i+1, $output);
    } else {
        return $output;
    }
};

$output = $simpleCalc($simpleCalc, $input);
print_r($output);