<?php

class Worker extends Human
{
    protected $salary;
    protected $work_hours;
    
    public function __construct($fname, $lname, $salary, $work_hours)
    {
        parent::__construct($fname, $this->setWorkerLname($lname));
        $this->setSalary($salary);
        $this->setWork_hours($work_hours);
    }
    
    function getSalary() {
        return str_replace(",", '.', number_format($this->salary, 2, ',', ''));
    }

    function getWork_hours() {
        return str_replace(",", '.', number_format($this->work_hours, 2, ',', ''));
    }
    
    function getSalaryPerHour() {
        return number_format(($this->salary / $this->work_hours / 7), 2);
    }
    
    function setWorkerLName($lname)
    {
        if(strlen($lname) <= 3)
        {
            throw new Exception("Expected length more than 3 symbols!Argument: lastName");
        }
        return $lname;
    }
            
    function setSalary($salary) {
        if($salary < 10)
        {
            throw new Exception("Expected value mismatch!Argument: weekSalary");
        }
        $this->salary = $salary;
    }

    function setWork_hours($work_hours) {
        if($work_hours < 1 || $work_hours > 12)
        {
            throw new Exception("Expected value mismatch!Argument: workHoursPerDay");
        }
        $this->work_hours = $work_hours;
    }


}