<?php

abstract class Food
{
    private $type;
    private $quantity;
    
    private function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    function getQuantity() {
        return $this->quantity;
    }


}