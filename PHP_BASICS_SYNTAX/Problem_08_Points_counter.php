<?php
//nedovar6ena - ne kombinira score-a na povtarq6tite otbori.
$team = [];
while(1)
{
    $input = trim(fgets(STDIN));
    if($input == "Result")
    {
        break;
    }
    
    $input = preg_replace('/[^A-Za-z0-9|\n]/', '', $input);
    $input = explode("|", $input);
    
    $team[$input[0]]['name'] = $input[0];
    $team[$input[0]]['player'] = $input[1];
    $team[$input[0]]['score'] = $input[2];
        
}
foreach ($team as $t)
{
    echo $t['name'].' => '.$t['score']."\n".'Most points scored by '.$t['player']."\n";
}
