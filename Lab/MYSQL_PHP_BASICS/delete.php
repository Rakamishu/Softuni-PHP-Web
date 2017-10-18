<?php

include "Database.php";
$db = new Database();
$dbh = $db->getDb();

$stm = $dbh->prepare("DELETE FROM students WHERE id = 10 OR address = ''");

$stm->execute();

echo 'deleted';