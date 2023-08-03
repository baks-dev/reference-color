<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function(ContainerConfigurator $configurator)
    {

        $services = $configurator->services()
            ->defaults()
            ->autowire(true)
            ->autoconfigure(true);

        $NAMESPACE = 'BaksDev\Reference\Color\\';

        $MODULE = substr(__DIR__, 0, strpos(__DIR__, "Resources"));

        $services->load($NAMESPACE.'Form\\', $MODULE.'Form');

        $services->load($NAMESPACE.'Type\Colors\\', $MODULE.'Type/Colors');

        $services->load($NAMESPACE.'Listeners\\', $MODULE.'Listeners');

        $services->load($NAMESPACE.'Twig\\', $MODULE.'Twig');

    };

