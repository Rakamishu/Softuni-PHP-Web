<?php

if(isset($_POST['submit']))
{
    include "Database.php";
    $db = new Database();
    $dbh = $db->getDb();


    $id = $_POST['id'];
    $param_name = $_POST['param_name'];
    $param_value = $_POST['param_value'];

    switch($param_name)
    {
        case "first_name":
            $table = "first_name";
        break;
        case "last_name":
            $table = "last_name";
        break;
        case "phone":
            $table = "phone";
        break;
        case "address":
            $table = "address";
        break;
    }

    $stm = $dbh->prepare("UPDATE students SET $table = ? WHERE id = ?");

    if(empty($id) || empty($param_name) || empty($param_value))
    {
        echo("all fields are mandatory");
    }
    else
    {
        $stm->execute([$param_value, $id]);

        echo ' updated';
    }
    echo $id;
}

?>

<form action="" method="post">
    Id: <input type="text" name="id"> <br>
    param name: <input type="text" name="param_name"> <br>
    param value: <input type="text" name="param_value"><br>
    <input type="submit" name="submit" value="submit">
</form>
