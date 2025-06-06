<?php
/*
 *  Copyright 2025.  Baks.dev <admin@baks.dev>
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
 *  FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 */

declare(strict_types=1);

namespace BaksDev\Reference\Color\Type\Colors\Collection;

use BaksDev\Reference\Color\Type\Colors\ColorsCollection;
use BaksDev\Reference\Color\Type\Colors\ColorsInterface;
use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

#[AutoconfigureTag('baks.colors')]
final class Red implements ColorsInterface
{
    /**
     * Красный
     */
    public const string COLOR = 'FF0000';

    public const array HAYSTACK = [
        'красный',
        'красная',
        'красное',
        'красные',

        'red',
        'FF0000'
    ];

    /** Возвращает значение (value) */
    public function getValue(): string
    {
        return self::COLOR;
    }

    /** Сортировка (чем меньше число - тем первым в итерации будет значение) */
    public static function sort(): int
    {
        return 4;
    }

    /**
     * Проверяет, относится ли строка цвета к данному объекту
     */
    public static function equals(string $color): bool
    {
        return array_any(self::HAYSTACK, static fn($item) => str_contains(mb_strtolower($color), mb_strtolower($item)));
    }

    /**
     * Метод фильтрует значение, удаляя его из строки
     */
    public static function filter(string $color): string
    {
        return ColorsCollection::filter(self::HAYSTACK, $color);
    }

}
