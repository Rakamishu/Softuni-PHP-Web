<?php

include "Person.php";
include "Child.php";




try{
     $Ana = new Person('Ana', 60); // Name’s length should not be less than 3 symbols!
    // $Pe6o = new Person('Pe6o', 0); // Age must be positive!
    // $Gosho = new Child('Gosho', 18);  //Child’s age must be less than 16!
} catch (Exception $ex) {
    echo $ex->getMessage();
}
