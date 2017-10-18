<?php

include "Database.php";
$db = new Database();
$dbh = $db->getDb();

$stm = $dbh->prepare("UPDATE students SET phone = ? WHERE id = 2");

$stm->execute(["0888123422"]);

echo 'updated';