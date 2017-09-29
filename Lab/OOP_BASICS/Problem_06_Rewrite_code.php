<?php

class Calc
{
    private $a;
    private $b;

    public function math_sum($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->a + $this->b;
    }
    
    public function math_div($a, $b)
    {
        $this->a = $this->math_check_if_zero($a);
        $this->b = $this->math_check_if_zero($b);
        return $a / $b;
    }
    
    private function math_check_if_zero($x)
    {
        if($x == 0)
        {
            echo "divison by zero";
            exit();
        }
    }
    
}

$sum = new Calc();
echo $sum->math_sum(2,3).'<hr />';
echo $sum->math_div(1,2);