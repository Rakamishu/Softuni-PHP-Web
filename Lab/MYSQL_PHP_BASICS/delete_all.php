<?php

include "Database.php";
$db = new Database();
$dbh = $db->getDb();

$stm = $dbh->prepare("DELETE FROM students");

$stm->execute();

echo 'deleted';