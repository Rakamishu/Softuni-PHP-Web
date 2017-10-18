<?php

include "Database.php";
$db = new Database();
$dbh = $db->getDb();

$stm = $dbh->prepare("INSERT INTO students (first_name, last_name, student_number, phone, address, date_of_record, last_update, active, motivation_letter, notes)
VALUES (?, ?, ?, ?, ? , NOW(), NOW(), ?, ?, ?)");


$stm->execute(["Petar", "Peshkov", "130512341", "08971234422", "Hr Botev 20", 1, "Very motivated", "notes are empty"]);

echo $dbh->lastInsertId();
echo ' added';

