<?php

$rows = 10;
$sequence = 'ATCGTTAGGG';
$currentIndex = 0;

for ($i = 0; $i < $rows; $i++) 
{
    $currentRow = $i % 4;  
    if ($currentRow === 0) 
    { 
        echo "**" . $sequence[$currentIndex++ % strlen($sequence)] . $sequence[$currentIndex++ % strlen($sequence)] . '**<br />';
    } 
    else if ($currentRow === 1 || $currentRow === 3) 
    {
        echo "*" . $sequence[$currentIndex++ % strlen($sequence)] . '--' . $sequence[$currentIndex++ % strlen($sequence)] . '*<br />';
    } 
    else 
    {
        echo $sequence[$currentIndex++ % strlen($sequence)] . '----' . $sequence[$currentIndex++ % strlen($sequence)].'<br />';
    }
}