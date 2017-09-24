<?php

$arr = [];

while(true)
{
    $input = trim(fgets(STDIN));
    $data = explode(" ", $input);
    
    foreach($data as $number)
    {
        if(isset($arr[$number])){
            $occ = $arr[$number]['occurence'];
            $arr[$number] = [
                'number' => $number,
                'occurence' => $occ + 1
            ];
        }
        else
        {
            $arr[$number] = [
                'number' => $number,
                'occurence' => 1
            ];
        }
    }
    ksort($arr);
    
    foreach($arr as $output)
    {
        echo $output['number'].' -> '.$output['occurence']." times\n";
    }
}
