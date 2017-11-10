<?php

namespace Core;

class Template implements TemplateInterface
{
    public function render (string $filename, $data)
    {
        require_once ($filename);
    }
}