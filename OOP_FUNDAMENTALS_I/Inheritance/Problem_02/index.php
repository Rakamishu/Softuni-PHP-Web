<?php

include "Book.php";
include "GoldenEditionBook.php";



$author = trim(fgets(STDIN));
$title = trim(fgets(STDIN));
$price = trim(fgets(STDIN));
$type = trim(fgets(STDIN));

try{
    if($type == "GOLD")
    {
        $book = new GoldenEditionBook($title, $author, $price, $type);
    }
    elseif($type == "STANDARD")
    {
        $book = new Book($title, $author, $price, $type);
    }
    echo $book->printResult();
} catch (Exception $ex) {
    echo $ex->getMessage();
}


