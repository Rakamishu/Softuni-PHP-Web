<?php

class DecimalNumber
{
    public $number;
    
    public function __construct($number)
    {
        $this->number = $number;
    }

    
    public function __toString()
    {
        return strrev($this->number);
    }
}


$number = new DecimalNumber(trim(fgets(STDIN)));
echo $number;