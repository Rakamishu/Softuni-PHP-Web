<?php

include "Database.php";
$db = new Database();
$dbh = $db->getDb();

$continents = $dbh->prepare("SELECT * FROM continents");
$result = $continents->execute();

foreach($continents as $i => $continent)
{
    echo $continent['continent_name'].' ('.$continent['continent_code'].'),';
}