<?php

namespace App\Http;

use App\Service\UserService;

class UserHttpHandler extends HttpHandlerAbstract
{
    public function profile(UserService $userService)
    {
        $this->render("View/profile.php", $userService->findByUsername($_GET['username']));
    }
}