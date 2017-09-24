<?php

$arr = [];

while(true)
{
    $input = trim(fgets(STDIN));
    if($input == "Over")
    {
        break;
    }
    
    $data = explode(":", $input);
    $data_left = rtrim($data[0]);
    $data_right = ltrim($data[1]);
    
    
    if(is_numeric($data_left)){
        $name = $data_right;
        $phone = $data_left;
    }
    else
    {
        $name = $data_left;
        $phone = $data_right;
    }
    
    $arr[] = [
        'name' => $name,
        'phone' => $phone
    ];    
}

asort($arr);

foreach($arr as $user)
{
    echo $user['name'].' -> '.$user['phone']."\n";
}