<?php

declare(strict_types=1);

namespace Plugin\Template\Abstractions;

use Plugin\Core\Abstractions\AbstractController;
use Plugin\Core\Services\Renderer\MustacheRenderer;

class TemplateController extends AbstractController
{
    public function __construct()
    {
        parent::__construct(new MustacheRenderer(dirname(__DIR__)));
    }
}
