<?php

class Student extends Human
{
    protected $fnumber;
    
    public function __construct($fname, $lname, $fnumber)
    {
        parent::__construct($fname, $lname);
        $this->setFnumber($fnumber);
    }

    function getFnumber() {
        return $this->fnumber;
    }
    
    function setFnumber($fnumber) {
        if(strlen($fnumber) < 5 || strlen($fnumber) > 10)
        {
            throw new Exception("Invalid faculty number!");
        }
        $this->fnumber = $fnumber;
    }
    
}