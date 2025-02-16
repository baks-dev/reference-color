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

namespace BaksDev\Reference\Color\Type\Colors;

use Symfony\Component\DependencyInjection\Attribute\AutowireIterator;

final class ColorsCollection
{
    private iterable $colors;

    public function __construct(
        #[AutowireIterator('baks.colors', defaultPriorityMethod: 'sort')] iterable $colors,
    )
    {
        $this->colors = $colors;
    }


    /** Возвращает массив из значений ColorInterface */
    public function cases(): array
    {
        foreach($this->colors as $key => $color)
        {
            /** @var ColorsInterface $color */
            $color = new $color();
            $case[$key.$color::sort()] = $color;
        }

        ksort($case);

        return $case;
    }


    /**
     * Метод фильтрует значение, удаляя его из строки
     */
    public static function filter(array $haystack, string $color): string
    {
        $haystack = array_map("mb_strtolower", $haystack);

        $color = mb_strtolower($color);
        $color = (string) str_ireplace($haystack, '', $color);
        $color = preg_replace('/\s+/', ' ', $color);
        $color = trim($color);

        return mb_ucfirst($color);
    }

}
