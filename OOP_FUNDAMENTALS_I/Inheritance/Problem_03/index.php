<?php

include "Human.php";
include "Student.php";
include "Worker.php";

$student_input = explode(" ", trim(fgets(STDIN)));
$worker_input = explode(" ", trim(fgets(STDIN)));

list($fname_student, $lname_student, $fnumber) = $student_input;
list($fname_worker, $lname_worker, $salary, $work_hours) = $worker_input;

try {
    $student = new Student($fname_student, $lname_student, $fnumber);
    $worker = new Worker($fname_worker, $lname_worker, $salary, $work_hours);

    echo "First Name: ".$student->getFname()."\n";
    echo "Last Name: ".$student->getLname()."\n";
    echo "Faculty number: ".$student->getFnumber()."\n";
    echo "\n";
    echo "First Name: ".$worker->getFname()."\n";
    echo "Last Name: ".$worker->getLname()."\n";
    echo "Week Salary: ".$worker->getSalary()."\n";
    echo "Hours per day: ".$worker->getWork_hours()."\n";
    echo "Salary per hour: ".$worker->getSalaryPerHour()."\n";
} catch (Exception $ex) {
    echo $ex->getMessage();
}