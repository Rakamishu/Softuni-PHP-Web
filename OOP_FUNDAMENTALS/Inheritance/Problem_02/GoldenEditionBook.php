<?php

class GoldenEditionBook extends Book
{
    protected function setPrice($price) {
        $price = $price + $price * 0.3;
        parent::setPrice($price);
    }
}