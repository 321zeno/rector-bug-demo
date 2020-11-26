<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Set\ValueObject\SetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $config) : void {
    $params = $config->parameters();

    $params->set(Option::PATHS, [
        __DIR__ . '/app',
    ]);

    $params->set(Option::PHP_VERSION_FEATURES, '5.6');
    $params->set(Option::IMPORT_SHORT_CLASSES, false);

    $params->set(Option::SETS, [
        SetList::PHP_72,
    ]);
};
