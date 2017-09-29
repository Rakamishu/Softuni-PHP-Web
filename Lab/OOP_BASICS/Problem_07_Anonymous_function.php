<?php

$obj = new stdClass();

$obj->name = "Penka";
$obj->age = "25";
$obj->city = "Sofia";
$obj->street = "Hadji Dimitar street";
$obj->occupation = "PHP developer";
$obj->children = 1;
$obj->married = false;
$obj->divorced = true;
$obj->salary = 1300;
$obj->car = "Nissan Micra";

foreach($obj as $key => $data)
{
    echo "$key -> $data <br/>";
}