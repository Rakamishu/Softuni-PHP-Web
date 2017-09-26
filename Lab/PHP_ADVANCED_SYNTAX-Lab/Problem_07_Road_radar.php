<?php

function getLimit($zone)
{
    switch($zone)
    {
        case "motorway":
            $speedLimit = 130;
            break;
        case "interstate":
            $speedLimit = 90;
            break;
        case "city":
            $speedLimit = 50;
            break;
        case "residential":
            $speedLimit = 20;
            break;
        default:
            echo "Not a Valid Input";
            break;
    }
    return $speedLimit;
}

function getInfraction($speed, $limit)
{
    $overSpeed = $speed - $limit;
    if($overSpeed < 0)
    {
        $result = false;
    }
    else 
    {
        if($overSpeed >= 0)
        {
            $result = "speeding";
        }
        if($overSpeed >= 20)
        {
            $result = "excessive speeding";
        }
        if($overSpeed >= 40)
        {
            $result = "reckless driving";
        }
    }
    return $result;
}


$speed = trim(fgets(STDIN));
$zone = trim(fgets(STDIN));

$limit = getLimit($zone);
$infraction = getInfraction($speed, $limit);
$overSpeed = $speed - $limit;


if($infraction)
{
    echo $infraction;
}
