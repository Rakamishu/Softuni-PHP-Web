<?php

include "Database.php";
$db = new Database();
$dbh = $db->getDb();

$result = $dbh->query("SELECT * FROM peaks WHERE mountain_id = 3 AND elevation > 6700");

foreach($result as $i => $continent) {
    echo $continent['peak_name'].','.$continent['elevation'].'<br>';
}