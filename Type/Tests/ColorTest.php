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

namespace BaksDev\Reference\Color\Type\Tests;

use BaksDev\Reference\Color\Type\Color;
use BaksDev\Reference\Color\Type\Colors\ColorsCollection;
use BaksDev\Reference\Color\Type\Colors\ColorsInterface;
use BaksDev\Reference\Color\Type\ColorType;
use BaksDev\Wildberries\Orders\Type\WildberriesStatus\Status\Collection\WildberriesStatusInterface;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use PHPUnit\Framework\Attributes\Group;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\DependencyInjection\Attribute\When;

#[When(env: 'test')]
#[Group('reference-color')]
final class ColorTest extends KernelTestCase
{
    public function testUseCase(): void
    {
        /** @var ColorsCollection $ColorsCollection */
        $ColorsCollection = self::getContainer()->get(ColorsCollection::class);
        $cases = $ColorsCollection->cases();

        self::assertCount(25, $cases);

        /** @var ColorsInterface $case */
        foreach($cases as $case)
        {
            $Color = new Color($case->getValue());

            self::assertTrue($Color->equals($case::class), 'Ошибка проверки класса '.$case::class); // немспейс интерфейса

            self::assertTrue($Color->equals($case)); // объект интерфейса
            self::assertTrue($Color->equals($case->getValue())); // срока
            self::assertTrue($Color->equals($Color)); // объект класса


            /** Создаем строку  */
            //$filter = implode(' ', $case::HAYSTACK);
            $filter = $case::filter(current($case::HAYSTACK));
            self::assertEmpty($filter, $filter.': '.implode(' ', $case::HAYSTACK));


            $ColorType = new ColorType();
            $platform = $this
                ->getMockBuilder(AbstractPlatform::class)
                ->getMock();

            $convertToDatabase = $ColorType->convertToDatabaseValue($Color, $platform);
            self::assertEquals($Color->getColorValue(), $convertToDatabase);

            $convertToPHP = $ColorType->convertToPHPValue($convertToDatabase, $platform);
            self::assertInstanceOf(Color::class, $convertToPHP);
            self::assertEquals($case, $convertToPHP->getColor());


        }

        self::assertTrue(true);
    }
}
