<?php

if(isset($_POST['submit']))
{
    include "Database.php";
    $db = new Database();
    $dbh = $db->getDb();

    $stm = $dbh->prepare("INSERT INTO students (first_name, last_name, student_number, phone, date_of_record, last_update)
    VALUES (?, ?, ?, ?, NOW(), NOW())");

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $student_number = $_POST['student_number'];
    $phone = $_POST['phone'];

    if(empty($first_name) || empty($last_name) || empty($student_number))
    {
        echo("mandatory fields are empty");
    }
    else
    {
        $stm->execute([$first_name, $last_name, $student_number, $phone]);

        echo "{$first_name} {$last_name} with ID: ".$dbh->lastInsertId();
        echo ' added';
    }
}

?>

<form action="" method="post">
    First name: <input type="text" name="first_name"> <br>
    Last name: <input type="text" name="last_name"> <br>
    Student number: <input type="text" name="student_number"><br>
    Phone: <input type="text" name="phone"><br>
    <input type="submit" name="submit" value="submit">
</form>
