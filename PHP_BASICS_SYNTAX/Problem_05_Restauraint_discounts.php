<?php

$groupSize = $_GET['group'];
$type = strtolower($_GET['type']); //Gold, gold.. we want both to work
$hall = "";
$price = 0.0;
$perPerson = 0.0;

if($groupSize <= 50)
{
    $hall = "Small Hall";
    $price = 2500;
}
else if($groupSize > 50 && $groupSize <= 100)
{
    $hall = "Terrace";
    $price = 5000;
}
else if($groupSize > 100 && $groupSize <= 120)
{
    $hall = "Great Hall";    
    $price = 7500;
}
else if($groupSize > 120)
{
    die("We do not have an appropriate hall.");
}

switch($type)
{
    case "normal":
        $price = $price + 500;
        $price = $price - ($price * 0.05); // 5% off
        $perPerson = sprintf("%0.2f", ($price / $groupSize)); //we use sprintf for the trailing zero.
        break;
    case "gold":
        $price = $price + 750;
        $price = $price - ($price * 0.1); // 10% off
        $perPerson = sprintf("%0.2f", ($price / $groupSize)); //we use sprintf for the trailing zero.
        break;
    case "platinum":
        $price = $price + 1000;
        $price = $price - ($price * 0.15); // 15% off
        $perPerson = sprintf("%0.2f", ($price / $groupSize)); //we use sprintf for the trailing zero.
        break;
}

$html = 'We can offer you the <b>'.$hall.'</b><br />';
$html .= 'The price per person is <b>'.$perPerson.'$</b>';

echo $html;