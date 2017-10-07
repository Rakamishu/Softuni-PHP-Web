<?php

class Person extends Product
{
    private $name;
    private $money;
    private $bag = [];
    
    public function __construct(string $name, float $money) {
        $this->name = $name;        
        $this->money = $money;     
    }
    
}