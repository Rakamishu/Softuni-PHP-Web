<?php

class Father
{
    private $yearBirth;
    private $yearDead;
    private $name;
    
    function __construct(string $name, int $yearBirth, int $yearDeath){
        $this->setName($name);
        $this->setYearBirth($yearBirth);
        $this->setYearDead($yearDead);
    } 

    function setYearBirth($yearBirth) {
        $this->yearBirth = $yearBirth;
    }

    function setYearDead($yearDead) {
        $this->yearDead = $yearDead;
    }

    function setName($name) {
        $this->name = $name;
    }

}