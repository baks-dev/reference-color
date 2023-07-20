<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function(ContainerConfigurator $configurator)
    {

        $services = $configurator->services()
            ->defaults()
            ->autowire(true)
            ->autoconfigure(true);

        $namespace = 'BaksDev\Reference\Color';

        $services->load($namespace.'\Form\\', __DIR__.'/../../Form');

        $services->load($namespace.'\Type\Colors\\', __DIR__.'/../../Type/Colors');

        $services->load($namespace.'\Listeners\\', __DIR__.'/../../Listeners');

    };

