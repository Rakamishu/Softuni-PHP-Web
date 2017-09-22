<form action="" method="post">
    <input type="text" name="name" placeholder="Name.." /><br />
    <input type="number" name="age" placeholder="Age.." /><br />
    <input type="radio" name="gender" value="male" /> Male <br />
    <input type="radio" name="gender" value="female" /> Female <br />
    <input type="submit" name="submit" value="Submit" />
</form>

<?php

if(isset($_POST['submit']))
{
    echo 'My name is '.$_POST['name'].'. I am '.$_POST['age'].' years old. I am '.$_POST['gender'].'.';
}