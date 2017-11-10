<?php

class EmployeeController extends Controller
{
    public function main()
    {
        echo 'asd';
    }

    public function view()
    {
        $m = new EmployeesModel($this->db);
        $res = $m->readAll();

        $this->loadView("header.php");
        $this->loadView("employee/view_all.php", $res);
        $this->loadView("footer.php");
    }

    public function addProjects()
    {
        $this->loadView("header.php");
        $this->loadView("employee/add_projects.php");
        $this->loadView("footer.php");
    }
}