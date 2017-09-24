<?php

$db = [];
$logs = [];
$failed = 0;

while(true)
{
    $input = trim(fgets(STDIN));
    if($input == "login")
    {
        break;
    } 
    
    $data = explode("->", $input);
    $username = rtrim($data[0]);
    $password = ltrim($data[1]);

    if(!in_array($username, $db)){ //dobavqme nov user kam bazata danni
        $db[$username] = [
            'password' => $password
        ];
    } 
    else //smenqme parolata
    {
        $db[$username]['password'] = $password; 
    }
}


while(true)
{
    $input = trim(fgets(STDIN));
    if($input == "end")
    {
        break;
    }
    
    $data = explode("->", $input);
    $username = rtrim($data[0]);
    $password = ltrim($data[1]);
    
    if(array_key_exists($username, $db) && ($db[$username]['password'] == $password)) // proverqva dali potrebitelq e dobaven i parolata savpada
    {
        $logs[] = [
            'username' => $username,
            'log' => 'logged in successfully'
        ];
    }
    else 
    {
        $failed++;
        $logs[] = [
            'username' => $username,
            'log' => 'login failed'
        ];
    }
}

foreach($logs as $log)
{
    echo $log['username'].': '.$log['log']."\n";
}

echo "usuccessful login attempts: $failed \n";