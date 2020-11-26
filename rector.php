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
        SetList::PHP_56,
        SetList::PHP_70,
        SetList::PHP_71,
        SetList::PHP_72,
        SetList::PHP_73,
        SetList::PHP_74,
    ]);
};
