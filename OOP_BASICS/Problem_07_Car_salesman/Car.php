<?php

class Car
{
    public $model;
    public $engine;
    public $weight;
    public $color;
    
    
    public function __construct(string $model, $engine, $weight = 'n/a', $color = 'n/a')
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->weight = $weight;
        $this->color = $color;
    }
    
}
