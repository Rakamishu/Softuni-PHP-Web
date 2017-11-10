<?php
include "Core/DatabaseInterface.php";
include "Core/Database.php";
include "Core/TemplateInterface.php";
include "Core/Template.php";
include "App/Http/HttpHandlerAbstract.php";
include "App/Http/UserHttpHandler.php";
include "App/Repository/userRepositoryInterface.php";
include "App/Repository/userRepository.php";
include "App/Service/UserServiceInterface.php";
include "App/Service/UserService.php";

$template = new \Core\Template();

$pdo = new PDO("mysql:host=localhost;dbname=custom_system;", "root", "");
$db = new \Core\Database($pdo);

$userRepository =  new \App\Repository\userRepository($db);

$userService = new \App\Service\UserService($userRepository);

$userHttpHandler = new \App\Http\UserHttpHandler($template);
$userHttpHandler->profile($userService, $_GET);

