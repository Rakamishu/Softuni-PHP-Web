<?php

namespace App\Http;

abstract class HttpHandlerAbstract
{
    private $template;

    public function __construct (\Core\Template $template)
    {
        $this->template = $template;
    }

    public function render(string $templateName, $data = null)
    {
        $this->template->render($templateName, $data);
    }
}