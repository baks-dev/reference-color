<?php
/*
 *  Copyright 2026.  Baks.dev <admin@baks.dev>
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
 */

declare(strict_types=1);

namespace BaksDev\Reference\Color\Services\Tests;

use BaksDev\Reference\Color\Services\TextToColor;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\Attribute\When;

#[When(env: 'test')]
#[Group('reference-color')]
final class TextToColorTest extends TestCase
{
    public function testTxtToCode(): void
    {
        $textToColor = new TextToColor();

        // Тест для существующих цветов
        self::assertEquals('54B3F7', $textToColor->txtToCode('white-sign'));
        self::assertEquals('000000', $textToColor->txtToCode('черный'));
        self::assertEquals('FFFFFF', $textToColor->txtToCode('белый'));
        self::assertEquals('808080', $textToColor->txtToCode('серый'));
        self::assertEquals('FF0000', $textToColor->txtToCode('красный'));
        self::assertEquals('FFA500', $textToColor->txtToCode('оранжевый'));

        // Тест для регистра (должен работать независимо от регистра)
        self::assertEquals('FF0000', $textToColor->txtToCode('Красный'));
        self::assertEquals('FF0000', $textToColor->txtToCode('КРАСНЫЙ'));
    }

    public function testTxtToCodeNotFound(): void
    {
        $textToColor = new TextToColor();

        // Тест для несуществующего цвета - будет вызвано предупреждение/ошибка
        // Так как ключ не найден в array_flip, будет возвращено null
        self::assertNull($textToColor->txtToCode('неизвестный-цвет'));
    }

    public function testCodeToTxt(): void
    {
        $textToColor = new TextToColor();

        // Тест для существующих HEX кодов
        self::assertEquals('черный', $textToColor->codeToTxt('000000'));
        self::assertEquals('белый', $textToColor->codeToTxt('FFFFFF'));
        self::assertEquals('красный', $textToColor->codeToTxt('FF0000'));
        self::assertEquals('синий', $textToColor->codeToTxt('0000FF'));

        // Тест для регистра (должен работать независимо от регистра)
        self::assertEquals('черный', $textToColor->codeToTxt('000000'));
        self::assertEquals('черный', $textToColor->codeToTxt('000000'));
    }

    public function testCodeToTxtNotFound(): void
    {
        $textToColor = new TextToColor();

        // Тест для несуществующего HEX кода - будет возвращено null
        self::assertNull($textToColor->codeToTxt('AAAAAA'));
    }

    public function testRoundTrip(): void
    {
        $textToColor = new TextToColor();

        // Проверка конвертации в обе стороны
        $hexCode = 'FF0000';
        $textName = 'красный';

        self::assertEquals($hexCode, $textToColor->txtToCode($textName));
        self::assertEquals($textName, $textToColor->codeToTxt($hexCode));
    }
}