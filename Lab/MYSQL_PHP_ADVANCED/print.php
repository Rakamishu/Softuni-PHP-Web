<?php

include "Database.php";

class Students
{
    private $db;

    public function __construct ()
    {
        $db = new Database();
        $this->db = $db->getDb();
    }

    public function getStudents()
    {
        $stmt = $this->db->prepare("SELECT * FROM students INNER JOIN student_subscriptions ON students.id = student_subscriptions.student_id 
INNER JOIN courses ON student_subscriptions.course_id = courses.course_id");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}

$students = new Students();
$data = $students->getStudents();

foreach($data as $student){
    echo $student['first_name'].' '.$student['last_name'].' '.$student['student_number'].' '.$student['course_name'].PHP_EOL;
}