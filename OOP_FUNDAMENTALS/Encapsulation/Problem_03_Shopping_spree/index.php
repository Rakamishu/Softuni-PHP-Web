<?php

include "Product.php";
include "Person.php";

$customers = explode(";", trim(fgets(STDIN)));
$products = explode(";", trim(fgets(STDIN)));



$people = [];
$products = [];
$cart = [];

$input_people = explode(";", trim(fgets(STDIN)));
$input_products = explode(";", trim(fgets(STDIN)));

foreach($input_people as $person)
{
    $person_data = explode("=", $person);
    if(isset($person_data[1])){
        $name = $person_data[0];
        $money = intval($person_data[1]);

        $people[] = new Person($name, $money);
    }
}

foreach($input_products as $products)
{
    $product_data = explode("=", $products);
    if(isset($product_data[1])){
        $name = $product_data[0];
        $price = intval($product_data[1]);

        $product[] = new Product($name, $price);
    }
}

while(true)
{
    $input_buy = explode(" ", trim(fgets(STDIN)));
    if($input_buy[0] == "END")
    {
        break;
    }
    list($name, $quantity) = $input_buy;
    
    if(!array_key_exists($name, $cart))
    {
        $cart[$name][$quantity] = 1;
    }
    elseif(array_key_exists($quantity, $cart[$name]))
    {
        $cart[$name][$quantity] += 1;
    }
    else 
    {
        $cart[$name][$quantity] = 1;
    }
    
    
}


var_dump($people);
var_dump($product);
var_dump($cart);