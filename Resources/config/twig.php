<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Reference\Color\Twig\ColorExtension;
use Symfony\Config\TwigConfig;

return static function(ContainerConfigurator $configurator, TwigConfig $config) {
	$services = $configurator->services()
		->defaults()
		->autowire()      // Automatically injects dependencies in your services.
		->autoconfigure() // Automatically registers your services as commands, event subscribers, etc.
	;
	
	/*$services->set(ColorExtension::class)
		->class(ColorExtension::class)
		->tag('twig.extension')
	;*/
	
	$namespace = 'BaksDev\Reference\Color';
	
	$services->load($namespace.'\Twig\\', __DIR__.'/../../Twig');
	
	$config->path(__DIR__.'/../view', 'Color');
	
};




