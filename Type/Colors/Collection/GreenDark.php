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

use BaksDev\Reference\Color\Type\Colors\ColorsInterface;
use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

#[AutoconfigureTag('baks.colors')]
final class GreenDark implements ColorsInterface
{
    /**
     * Темно-Зеленый
     */
    public const string COLOR = '006400';

    public const array HAYSTACK = [
        'темно-зеленый',
        'темно-зеленая',
        'темно-зеленое',
        'темно-зеленые',

        'green-dark',
        '006400',
    ];

    /** Возвращает значение (value) */
    public function getValue(): string
    {
        return self::COLOR;
    }

    /** Сортировка (чем меньше число - тем первым в итерации будет значение) */
    public static function sort(): int
    {
        return 52;
    }

    /**
     * Проверяет, относится ли строка цвета к данному объекту
     */
    public static function equals(string $color): bool
    {
        $color = str_replace('ё', 'e', $color);

        return array_any(self::HAYSTACK, static fn($item) => str_contains(mb_strtolower($color), mb_strtolower($item)));
    }

    /**
     * Метод фильтрует значение, удаляя его из строки
     */
    public static function filter(string $color): string
    {
        $color = str_replace('ё', 'e', $color);

        $haystack = array_map("mb_strtolower", self::HAYSTACK);

        $color = mb_strtolower($color);
        $color = (string) str_ireplace($haystack, '', $color);
        $color = preg_replace('/\s+/', ' ', $color);
        $color = trim($color);

        return mb_ucfirst($color);
    }


}
