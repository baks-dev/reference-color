# BaksDev Color

[![Version](https://img.shields.io/badge/version-7.2.9-blue)](https://github.com/baks-dev/reference-color/releases)
![php 8.4+](https://img.shields.io/badge/php-min%208.4-red.svg)
[![packagist](https://img.shields.io/badge/packagist-green)](https://packagist.org/packages/baks-dev/reference-color)

Библиотека цветов "Color"

## Установка

``` bash
$ composer require baks-dev/reference-color
```

## Настройки

Для отображения в выпадающих списках, добавить настройку сервиса в конфиг:

config/packages/reference.php

``` php
<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Reference\Color\Choice\ReferenceChoiceColor;

return static function (ContainerConfigurator $configurator) {
	
	$services = $configurator->services()
            ->defaults()
            ->autowire(true)
            ->autoconfigure(true)
	;

	$services
            ->set(ReferenceChoiceColor::class)
            ->tag('baks.reference.choice')
	;
};

```

## Лицензия ![License](https://img.shields.io/badge/MIT-green)

The MIT License (MIT). Обратитесь к [Файлу лицензии](LICENSE.md) за дополнительной информацией.
