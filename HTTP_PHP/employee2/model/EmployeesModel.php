<?php

class EmployeesModel extends Model
{

    public function __construct ($db)
    {
        $this->table = "employees";
        $this->db = $db;
    }


    public function readAll()
    {
        // Todo
        $stmt = $this->db->prepare("SELECT * FROM ".$this->table);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}