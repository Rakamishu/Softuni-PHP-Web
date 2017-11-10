<?php

namespace App\Service;


use App\Repository\userRepository;

class UserService implements UserServiceInterface
{

    public function __construct (userRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function findByUsername (string $username)
    {
        return $this->userRepository->findByUsername($username);
    }

    public function findAll ()
    {
        return $this->userRepository->findAll();
    }
}