<?php
//nedovar6ena.
$input = "3 2 3 4 2 2 4 5 6 7";
$explode = explode(" ", $input);
$count = count($explode);


$start = 0;
$max_seq = 1;
$max_seq_end_num = 0;

for($i = 0; $i < $count; $i++)
{
    $start++;
    var_dump($explode);
    if($explode[$i] == @$explode[$i + 1])
    {
        echo '-';
        if($max_seq > $start)
        {
            echo 'asd';
            $max_seq = $start;
            $max_seq_end_num = $explode[$i];
        }
    }
    var_dump($explode[$i]);
}


echo $start;