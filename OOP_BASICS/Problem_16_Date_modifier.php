<?php

class DateModifier 
{
    
    private $date1;
    private $date2; 
    
    public function __construct(string $date1, string $date2)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }
    
    public function difference()
    {
        $datetime1 = new DateTime($this->date1);
        $datetime2 = new DateTime($this->date2);
        $interval = $datetime1->diff($datetime2);
        return $interval->format('%a');
    }
}

$date1 = trim(fgets(STDIN));
$date2 = trim(fgets(STDIN));
$date1 = str_replace(" ", "-", $date1);
$date2 = str_replace(" ", "-", $date2);

$datemodifier = new DateModifier($date1, $date2);
echo $datemodifier->difference();