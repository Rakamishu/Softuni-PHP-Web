<?php

$input = 145;
$result = "";

if($input <= 101) 
{
    echo 'no';
}
else 
{
    for ($i = 101; $i <= $input; $i++)
    {
        if ($i < 1000)
        {
            $first = $i % 10;
            $second = floor($i % 100 / 10);
            $third = floor($i % 1000 / 100);
            
            if ($first != $second && $first != $third && $second != $third)
            {
                $result .= $i.', ';
            }
        }
    }
}

$result = substr($result, 0, strlen($result)-2);

echo $result;