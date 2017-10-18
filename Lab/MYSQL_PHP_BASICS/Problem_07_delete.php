<?php

if(isset($_POST['submit']))
{
    include "Database.php";
    $db = new Database();
    $dbh = $db->getDb();


    $id = $_POST['id'];

    $stm = $dbh->prepare("DELETE FROM students WHERE id = ?");

    if(empty($id))
    {
        echo("all fields are mandatory");
    }
    else
    {
        $stm->execute([$id]);

        echo ' deleted';
    }
    echo $id;
}

?>

<form action="" method="post">
    Id: <input type="text" name="id"> <br>
    <input type="submit" name="submit" value="delete">
</form>
