<?php

include "Database.php";
$db = new Database();
$dbh = $db->getDb();

$continents = $dbh->query("SELECT a.country_name FROM countries AS a, continents as b WHERE a.continent_code = b.continent_code AND a.population >  1000000000");

foreach($continents as $i => $continent) {
    echo $continent['country_name'].',';
}