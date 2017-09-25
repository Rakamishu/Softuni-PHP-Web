<?php

$db = [];

while(true)
{
    $input = trim(fgets(STDIN));
    if($input == "filter base")
    {
        break;        
    }
    
    $data = explode(" -> ", $input);
    $db[$data[0]]['name'] = $data[0];
    if(preg_match("/^[1-9][0-9].*$/", $data[1]))
    {
        if(preg_match("/^[1-9][0-9]*$/", $data[1]))
        {
            $db[$data[0]]['age'] = $data[1];
        }
        else
        {
            $db[$data[0]]['salary'] = $data[1];
        }
    } 
    else 
    {
        $db[$data[0]]['position'] = $data[1];
    }
    
}

$sort = trim(fgets(STDIN));
if($sort == "Position")
{
    foreach($db as $person)
    {
        if(isset($person['position']))
        {
            echo "Name: ".$person['name']."\n";
            echo "Position: ".$person['position']."\n";
            echo str_repeat("=", 20)."\n";
        }

    }
}
else if($sort == "Salary")
{
    foreach($db as $person)
    {
        if(isset($person['salary']))
        {
            echo "Name: ".$person['name']."\n";
            echo "Salary: ".sprintf("%0.2f", $person['salary'])."\n";
            echo str_repeat("=", 20)."\n";
        }
    }
}