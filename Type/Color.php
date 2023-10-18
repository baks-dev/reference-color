<?php
/*
 *  Copyright 2023.  Baks.dev <admin@baks.dev>
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is furnished
 *  to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 *
 *
 */

namespace BaksDev\Reference\Color\Type;

use BaksDev\Reference\Color\Type\Colors\Collection\ColorsInterface;
use BaksDev\Reference\Currency\Type\Currencies\Collection\CurrencyInterface;
use InvalidArgumentException;

final class Color
{

    public const TYPE = 'color_type';

    private ColorsInterface $color;


    public function __construct(ColorsInterface|self|string $color)
    {

        if(is_string($color) && class_exists($color))
        {
            $instance = new $color();

            if($instance instanceof ColorsInterface)
            {
                $this->color = $instance;
                return;
            }
        }

        if($color instanceof ColorsInterface)
        {
            $this->color = $color;
            return;
        }

        if($color instanceof self)
        {
            $this->color = $color->getColor();
            return;
        }

        /** @var ColorsInterface $declare */
        foreach(self::getDeclared() as $declare)
        {
            if($declare::equals($color))
            {
                $this->color = new $declare;
                return;
            }
        }

        throw new InvalidArgumentException(sprintf('Not found Color %s', $color));

    }


    public function __toString(): string
    {
        return $this->color->getValue();
    }


    /** Возвращает значение ColorsInterface */
    public function getColor(): ColorsInterface
    {
        return $this->color;
    }


    /** Возвращает значение ColorsInterface */
    public function getColorValue(): string
    {
        return $this->color->getValue();
    }


    public static function cases(): array
    {
        $case = [];

        foreach(self::getDeclared() as $measurement)
        {
            /** @var CurrencyInterface $measurement */
            $class = new $measurement;
            $case[$class::sort()] = new self($class);
        }

        return $case;
    }


    public static function getDeclared(): array
    {
        return array_filter(
            get_declared_classes(),
            static function($className) {
                return in_array(ColorsInterface::class, class_implements($className), true);
            }
        );
    }

    public function equals(mixed $status): bool
    {
        $status = new self($status);

        return $this->getColorValue() === $status->getColorValue();
    }

}