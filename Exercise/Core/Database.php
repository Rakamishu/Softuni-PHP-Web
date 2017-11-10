<?php

namespace Core;
use PDO;

class Database implements DatabaseInterface
{

    private $db;

    public function __construct (\PDO $db)
    {
        $this->db = $db;
    }

    public function query (string $query, array $params = [])
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute($params);
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        return $row;
    }
}