<?php

class Product
{
    private $name;
    private $cost;
    
    public function __construct(string $name, float $cost) {
        $this->name = $name;
        $this->cost = $cost;
    }

}