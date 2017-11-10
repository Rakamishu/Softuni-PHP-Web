<?php

abstract class Controller
{

    protected $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    abstract public function main();

    protected function loadView($filename, $params = null)
    {
        if(file_exists("view/".$filename))
        {
            include "view/".$filename;
        }
        else
        {
            throw new Exception("View not found");
        }
    }

}