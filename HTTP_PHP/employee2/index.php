<?php
// Load DB
include "db_config.php";

// Load Core classes
include "core/Model.php";
include "core/Controller.php";

// Load model classes - they extend Model.php
include "model/AddressesModel.php";
include "model/EmployeesModel.php";

// Load Controller class - it extends Controller.php
include "controller/MainController.php";
include "controller/EmployeeController.php";

// Todo

$route_error = false;
if(!empty($_GET['controller']))
{
    if(preg_match("/^[A-Za-z]+$/", $_GET['controller']))
    {
        $controller = $_GET['controller'];
    }
    else
    {
        $route_error = true;
    }
}
else
{
    $controller = "MainController";
}


if(!empty($_GET['action']))
{
    if(preg_match("/^[A-Za-z]+$/", $_GET['action']))
    {
        $action = $_GET['action'];
    }
    else
    {
        $route_error = true;
    }
}
else
{
    $action = "main";
}


if($route_error === false)
{
    $c = new $controller($db);
    $c->$action();
}
