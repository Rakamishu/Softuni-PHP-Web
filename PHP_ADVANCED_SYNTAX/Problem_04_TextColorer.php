<form action="" method="post">
    <textarea cols="100" rows="5" name="input"></textarea><br />
    <input type="submit" name="submit" value="Color text" />
</form>
<?php
if(isset($_POST['submit']) && !empty($_POST['input']))
{
    
    $input = $_POST['input'];
    $letters = str_split($input);
    
    foreach($letters as $letter)
    {
        $ascii = ord($letter);
        
        if($ascii % 2 == 0){
            echo '<font color="red">'.$letter.'</font>';
        } else {
            echo '<font color="blue">'.$letter.'</font>';
        }
    }
    
    
}