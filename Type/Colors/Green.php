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
 *  FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 */

declare(strict_types=1);

namespace BaksDev\Reference\Color\Type\Colors;

use BaksDev\Reference\Color\Type\Colors\Collection\ColorsInterface;
use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

#[AutoconfigureTag('baks.colors')]
final class Green implements ColorsInterface
{
    /**
     * Зеленый
     */
    public const COLOR = '008000';

    /** Возвращает значение (value) */
    public function getValue(): string
    {
        return self::COLOR;
    }

    /** Сортировка (чем меньше число - тем первым в итерации будет значение) */
    public static function sort(): int
    {
        return 59;
    }

    /**
     * Проверяет, относится ли строка цвета к данному объекту
     */
    public static function equals(string $color): bool
    {

        $color = mb_strtolower($color);

        if($color === mb_strtolower(self::COLOR))
        {
            return true;
        }

        return stripos($color, 'зеленый') !== false
            || stripos($color, 'зелёный') !== false
            || stripos($color, 'green') !== false;
    }

}
