<form action="" method="post">
    <textarea cols="100" rows="5" name="input"></textarea><br />
    <input type="submit" name="submit" value="Count words" />
</form>
<?php
if(isset($_POST['submit']))
{
    $input = $_POST['input'];

    $sanitize = preg_replace("/[^A-Za-z0-9а-яА-Я ]/", '', $input);
    $sanitize = strtolower($sanitize);
    $data = explode(" ", $sanitize);

    $count = array_count_values($data);
    $data = array_unique($data);
    
    
    echo '<table border="1">';
    for($i = 0; $i < count($data); $i++)
    {
        if(isset($data[$i]))
        {
            echo '<tr>';
            echo '<td>'.$data[$i].'</td><td>'.$count[$data[$i]].'</td>';
            echo '</tr>';
        }
    }
    echo '</table>';
}