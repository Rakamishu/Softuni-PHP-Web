<?php

$str = array_count_values(str_split("The quick brown fox jumps over the lazy dog"));


foreach($str as $letter => $count)
{
    echo $letter.' -> '.$count."\n";
}

