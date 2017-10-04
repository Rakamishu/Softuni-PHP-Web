<?php

include "Person.php";
include "Family.php";

$n = intval(trim(fgets(STDIN)));

$family = new Family();

for($i = 0; $i < $n; $i++)
{
    $input = explode(" ", trim(fgets(STDIN)));
    
    $person = new Person($input[0], intval($input[1]));
    $family->addMember($person);
}

$family->getOldestMember();