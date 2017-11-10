<?php

namespace App\Service;

interface UserServiceInterface
{
    public function findByUsername(string $username);
    public function findAll();
}