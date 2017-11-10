<?php

namespace Core;

interface DatabaseInterface
{
    public function query(string $query);
}