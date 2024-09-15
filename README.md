# BaksDev Color

[![Version](https://img.shields.io/badge/version-7.1.7-blue)](https://github.com/baks-dev/reference-color/releases)
![php 8.3+](https://img.shields.io/badge/php-min%208.3-red.svg)

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
