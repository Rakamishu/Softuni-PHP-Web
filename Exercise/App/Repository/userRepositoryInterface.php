<?php

namespace App\Repository;

interface userRepositoryInterface
{
    public function findByUsername(string $username);
    public function findAll();
}