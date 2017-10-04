<?php

class Number
{
    public $number;
    
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    
    public function numToText()
    {
        $array = str_split($this->number);
        $last_digit = end($array);
        
        switch ($last_digit)
        {
            case 0: return "zero"; break;
            case 1: return "one"; break;
            case 2: return "two"; break;
            case 3: return "three"; break;
            case 4: return "four"; break;
            case 5: return "five"; break;
            case 6: return "six"; break;
            case 7: return "seven"; break;
            case 8: return "eight"; break;
            case 9: return "nine"; break;
        }
    }
}


$number = new Number(trim(fgets(STDIN)));
echo $number->numToText();