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

    public function add(string $first_name, string $last_name, int $student_number, string $course_name)
    {
        //Check if the student number exists
        $this->checkStudentNumber($student_number);

        //Check if the course exists and return its ID.
        $course_id = $this->getCourseId($course_name);

        //Add student
        $add_student = $this->db->prepare("INSERT INTO students (first_name, last_name, student_number) VALUES (?, ?, ?)");
        $add_student->execute([$first_name, $last_name, $student_number]);

        //Subscribe student
        $add_subscription = $this->db->prepare("INSERT INTO student_subscriptions (course_id, student_id) VALUES (?, ?)");
        $student_id = $this->db->lastInsertId();
        $add_subscription->execute([$course_id, $student_id]);
    }

    private function getCourseId(string $course_name)
    {
        $stmt = $this->db->prepare("SELECT course_id FROM courses WHERE course_name = ?");
        $stmt->execute([$course_name]);
        $course_id = $stmt->fetch(PDO::FETCH_ASSOC);
        if($course_id['course_id']){
            return $course_id['course_id'];
        } else {
            throw new Exception("Course does not exist");
        }
    }

    private function checkStudentNumber(int $student_number)
    {
        $stmt = $this->db->prepare("SELECT COUNT(*) as count FROM students WHERE student_number = ?");
        $stmt->execute([$student_number]);
        $count = $stmt->fetch(PDO::FETCH_ASSOC);
        if($count['count'] > 0){
            throw new Exception("Student already exists");
        } else {
            return $count['count'];
        }
    }

}


$students = new Students();
while(1)
{
    $input = trim(fgets(STDIN));
    $data = explode(" ", $input);
    if($data[0] == "end")
    {
        break;
    }

    list($first_name, $last_name, $student_number, $course_name) = $data;

    try {
        $students->add($first_name, $last_name, $student_number, $course_name);
    } catch (Exception $ex){
        echo $ex->getMessage().PHP_EOL;
    }
}
