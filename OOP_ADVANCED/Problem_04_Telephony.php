<?php

interface call
{
    public function call(string $call);
}
interface browse
{
    public function browse(string $browse);
}

class Smartphone implements call, browse
{    
    public function call(string $call) {
        if(preg_match("/[0-9]/i", $call))
        {
            echo "Calling... ".$call;
        } 
        else
        {
            throw new Exception("Invalid number!");
        }
    }
    
    public function browse(string $browse) {
        if(!preg_match("~[0-9]~", $browse))
        {
            echo "Browsing: ".$browse."!";
        } 
        else
        {
            throw new Exception("Invalid URL!");
        }
    }
}


$phones = explode(" ", trim(fgets(STDIN)));
$sites = explode(" ", trim(fgets(STDIN)));

$nokia3310 = new Smartphone();
try {
    foreach($phones as $phone)
    {
        echo $nokia3310->call($phone).PHP_EOL;
    }
    foreach($sites as $browse)
    {
        echo $nokia3310->browse($browse).PHP_EOL;
    }
} catch (Exception $ex) {
    echo $ex->getMessage().PHP_EOL;
}
