<?php

namespace App\Repository;

class userRepository implements userRepositoryInterface
{

    private $db;

    public function __construct (\Core\DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function findByUsername (string $username)
    {
        return $this->db->query("SELECT username, email FROM users WHERE username = ?", [$username]);
    }

    public function findAll ()
    {
        // TODO
    }
}