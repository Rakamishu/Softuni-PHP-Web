<?php

include "Database.php";

class Employee
{
    public function __construct ()
    {
        $db = new Database();
        $this->db = $db->getDb();
    }

    public function insertEmployee(string $first_name, string $middle_name, string $last_name, string $department, string $position, string $passport)
    {
        $stmt = $this->db->prepare("INSERT INTO employees (first_name, middle_name, last_name, department, position, passport_id) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$first_name, $middle_name, $last_name, $department, $position, $passport]);
        echo "New employee ".$first_name.' '.$middle_name.' '.$last_name.' saved.';
    }

    public function getInfo($first_name, $last_name)
    {
        $stmt = $this->db->prepare("SELECT * FROM employees WHERE first_name = ? AND last_name = ?");
        $stmt->execute([$first_name, $last_name]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['id'].', '.$row['first_name'].', '.$row['middle_name'].', '.$row['last_name'].', '.$row['passport_id'];
    }
}

$app = new Employee();

$input = trim(fgets(STDIN));

$data = explode(", ", $input);

if($data[0] == "Info")
{
    list($cmd, $first_name, $last_name) = $data;
    $info = $app->getInfo($first_name, $last_name);
    echo $info;
} else {
    @list($first_name, $middle_name, $last_name, $department, $position, $passport) = $data;
    $passport = explode(" ", $passport);
    $passport_id = @$passport[1];

    try {
        $app->insertEmployee($first_name, $middle_name, $last_name, $department, $position, $passport_id);
    } catch (TypeError $ex) {
        echo "Error: Please, check your input syntax.";
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}

