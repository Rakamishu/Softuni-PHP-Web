<?php

$input = [
    [@$_GET['operation'], @$_GET['a'], @$_GET['b']]
];

$opSum  = function ($a, $b) {
    return $a + $b;
};

$opSubtract = function ($a, $b){
    return $a - $b;
};

$opDivide = function ($a, $b){
    return ($b == 0) ? "divison_by_zero" : $a / $b;
};

$opMultiply = function ($a, $b){
    return $a * $b;
};

$simpleCalc = function (&$simpleCalc, $input, $i = 0, $output = []) use ($opSum, $opSubtract, $opDivide, $opMultiply){
    if($i < count($input)){
        $op = $input[$i][0];
        $a = $input[$i][1];
        $b = $input[$i][2];
        if($a < 0 || $a > 100 || $b < 0 || $b > 100){
            $output[] = 'error';
        }
        else if($op == 'sum'){
            $output[] = $opSum($a, $b);
        }
        else if($op == 'multiply'){
            $output[] = $opMultiply($a, $b);
        }
        else if($op == "subtract"){
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