<?php
class Fibonacci
{
    private $fibonacciSequence = [0, 1];

    function getFibonacciRange(int $startIndex, int $endIndex)
    {
        for ($i = 2; $i < $endIndex; $i++)
        {
            $a = $this->fibonacciSequence[$i - 2];
            $b = $this->fibonacciSequence[$i - 1];
            $this->fibonacciSequence[] = $a + $b;
        }
        $numberInRange = array_slice($this->fibonacciSequence, $startIndex, $endIndex);
        return implode(", ", $numberInRange);
    }
}
$start = intval(trim(fgets(STDIN)));
$end = intval(trim(fgets(STDIN)));
$number = new Fibonacci($start, $end);
echo $number->getFibonacciRange($start, $end);