<?php

$this_month = new DateTime('last day of this month'); //vzima ednovremeno meseca i poslednata data

for($i = 1; $i <= $this_month->format("d"); $i++)
{
    $day = new DateTime($this_month->format('Y').'-'.$this_month->format('m')."-$i");
    
    if($day->format('l') == "Sunday")
    {
        echo $day->format('jS F, Y').'<br>';
    }
}