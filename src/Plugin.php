<?php

declare(strict_types=1);

namespace Plugin\Template;

use Plugin\Core\Abstractions\AbstractPlugin;

class Plugin extends AbstractPlugin
{
    public const NAME = "plugin-template";
    public const VERSION = "1.0";

    public function defineConstants(): void
    {
    }

    public function dependencies(): array
    {
        return [];
    }
}
