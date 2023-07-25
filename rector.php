<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    // Parallel
    $rectorConfig->parallel(3600,
        16,
        20);

    // >= 8.0
    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_80
    ]);
};
