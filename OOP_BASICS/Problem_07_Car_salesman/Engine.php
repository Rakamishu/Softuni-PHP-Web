<?php

class Engine
{
    public $model;
    public $power;
    public $displacement;
    public $efficiency;
    
    public function __construct(string $model, int $power, $displacement = 'n/a', $efficiency = 'n/a') {
        $this->model = $model;
        $this->power = $power;
        $this->displacement = $displacement;
        $this->efficiency = $efficiency;
    }
}