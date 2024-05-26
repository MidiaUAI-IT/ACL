<?php

declare(strict_types=1);

namespace Midiauai\ACL;

class Module
{
    public function getConfig(): array
    {
        /** @var array $config */
        $config = include __DIR__ . '/../config/module.config.php';
        $config += include __DIR__ . '/../config/doctrine.migrations.config.php';
        return $config;
    }
}
