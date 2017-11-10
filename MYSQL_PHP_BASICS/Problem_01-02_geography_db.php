<?php

class Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=127.0.0.1;dbname=geography", 'root', '');

        //$this->db = mysqli_connect("127.0.0.1", "root", "", "geography"); //1.1.	Connecting through MySQLi*
    }

    /**
     * @return PDO
     */
    public function getDb()
    {
        return $this->db;
    }
}


$db = new Database();
$dbh = $db->getDb();


$continents = $dbh->query("SELECT * FROM `continents`");

foreach($continents as $i => $continent){
    print_r($continent);
    echo("\n\r");
}
