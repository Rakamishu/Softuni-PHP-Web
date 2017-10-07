<?php

class Human
{
    protected $fname;
    protected $lname;
    
    public function __construct($fname, $lname)
    {
        $this->setFname($fname);
        $this->setLname($lname);
    }
    
    function getFname() {
        return $this->fname;
    }

    function getLname() {
        return $this->lname;
    }
    
    function setFname($fname) {
        $split = str_split($fname);
        if($split[0] != strtoupper($split[0]))
        {
            throw new Exception("Expected upper case letter!Argument: firstName");
        }
        if (strlen($fname) < 4) {
            throw new Exception("Expected length at least 4 symbols!Argument: firstName");
        }
        $this->fname = $fname;
    }

    function setLname($lname) {
        $split = str_split($lname);
        if($split[0] != strtoupper($split[0]))
        {
            throw new Exception("Expected upper case letter!Argument: lastName");
        }
        if (strlen($lname) < 3) {
            throw new Exception("Expected length at least 3 symbols!Argument: lastName");
        }
        $this->lname = $lname;
    }


    
}