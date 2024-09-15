<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Reference\Color\Type\Color;
use BaksDev\Reference\Color\Type\ColorType;
use Symfony\Config\DoctrineConfig;

return static function (DoctrineConfig $doctrine) {
    $doctrine->dbal()->type(Color::TYPE)->class(ColorType::class);
};
