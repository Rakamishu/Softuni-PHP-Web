<?php

class Employee
{
    public $name;
    public $salary;
    public $position;
    public $department;
    public $email = null;
    public $age = null;
    
    
    public function __construct(string $name, float $salary, string $position, string $department, string $email, int $age) {
        $this->name = $name;
        $this->salary = number_format($salary, 2);
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->age = $age;
    }
}


$lines = trim(fgets(STDIN));
$employees = [];
$departments = [];
$best_department = "";
$best_salary = 0;

for($i = 0; $i < $lines; $i++)
{
    $input = explode(" ", trim(fgets(STDIN)));
    $name = $input[0];
    $salary = $input[1];
    $position = $input[2];
    $department = $input[3];
    $email = isset($input[4]) ? $input[4] : "n/a";
    $age = isset($input[5]) ? $input[5] : -1;
    
    if(array_key_exists($department, $departments))
    {
        $departments[$department]['salary'] += (float)$salary;
        $departments[$department]['employees'] += 1;
    } 
    else
    {
        $departments[$department]['salary'] = (float)$salary;
        $departments[$department]['employees'] = 1;
    }
    
    $employees[] = new Employee($name, $salary, $position, $department, $email, $age);
}

$average_salary = [];
foreach($departments as $department => $salary)
{
    $average_salary[$department] = $salary['salary'];
}
array_multisort($average_salary, SORT_DESC, $departments);

usort($employees, function($a, $b) {
    return $b->salary - $a->salary;
});

echo "Highest Average Salary: ".key($average_salary)."\n";
foreach($employees as $employee)
{
    if($employee->department != key($average_salary))
    {
        unset($employee);
    } else 
    {
        echo $employee->name.' '.$employee->salary.' '.$employee->email.' '.$employee->age."\n";
    }    
}