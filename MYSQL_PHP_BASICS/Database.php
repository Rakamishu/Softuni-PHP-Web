<?php

class Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:dbname=geography;host=127.0.0.1", 'root', '');
    }

    public function getDb()
    {
        return $this->db;
    }
}