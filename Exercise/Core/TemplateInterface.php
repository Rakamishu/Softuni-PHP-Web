<?php

namespace Core;

interface TemplateInterface
{
    public function render(string $filename, $data);
}