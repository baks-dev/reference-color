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

namespace BaksDev\Reference\Color\Services;

use function mb_strtolower;

final class TextToColor
{
	private array $data = [
		'54B3F7' => 'white-sign',
		'000000' => 'черный',
		'FFFFFF' => 'белый',
		'808080' => 'серый',
		'FF0000' => 'красный',
		'800080' => 'фиолетовый',
		'FFA500' => 'оранжевый',
		'FFFF00' => 'желтый',
		'FFD700' => 'золотой',
		'808000' => 'оливковый',
		'008000' => 'зеленый',
		'0000FF' => 'синий',
		'F5F5DC' => 'бежевый',
		'FFC0CB' => 'розовый',
		'191970' => 'полуночный синий',
		'696969' => 'тускло-серый',
		'708090' => 'серый шифер',
		'778899' => 'светло-серый шифер',
		'800000' => 'темно-бордовый',
		'8B0000' => 'темно-красный',
		'B22222' => 'огнеупорный кирпич',
		'FA8072' => 'лососевый',
		'FF6347' => 'томатный',
		'FF7F50' => 'коралловый',
		'FF4500' => 'оранжево-красный',
		'D2691E' => 'шоколадный',
		'F4A460' => 'песочно-коричневый',
		'FF8C00' => 'темно-оранжевый',
		'B8860B' => 'темный золотарник',
		'DAA520' => 'золотарников',
		'9ACD32' => 'желто-зеленый',
		'ADFF2F' => 'зелено-желтый',
		'7FFF00' => 'шартрез (ликер)',
		'7CFC00' => 'зеленый газон',
		'00FF00' => 'лаймовый',
		'32CD32' => 'зеленый лайм',
		'00FF7F' => 'весенне зеленый',
		'00FA9A' => 'весенне-зеленый нейтральный',
		'40E0D0' => 'бирюзовый',
		'20B2AA' => 'светло-зеленое море',
		'48D1CC' => 'бирюзовый нейтральный',
		'008B8B' => 'темный циан',
		'00FFFF' => 'морская волна',
		'00CED1' => 'темно-бирюзовый',
		'00BFFF' => 'голубой',
		'1E90FF' => 'обманчивый синий',
		'4169E1' => 'королевский синий',
		'000080' => 'военно-морского флота',
		'00008B' => 'темно-синий',
		'0000CD' => 'синий нейтральный',
		'8A2BE2' => 'сине-фиолетовый',
		'9932CC' => 'темная орхидея',
		'9400D3' => 'темно-фиолетовый',
		'8B008B' => 'темный маджета',
		'FF00FF' => 'маджета',
		'C71585' => 'фиолетово-красный нейтральный',
		'FF1493' => 'насыщенный розовый',
		'FF69B4' => 'ярко-розовый',
		'DC143C' => 'малиновый',
		'A52A2A' => 'коричневый',
		'CD5C5C' => 'красный индийский',
		'BC8F8F' => 'розово-коричневый',
		'F08080' => 'светло-коралловый',
		'FFFAFA' => 'снег',
		'FFE4E1' => 'туманная роза',
		'E9967A' => 'темный лосось',
		'FFA07A' => 'светлый лосось',
		'A0522D' => 'охра',
		'FFF5EE' => 'морская ракушка',
		'8B4513' => 'седло браун',
		'FFDAB9' => 'персиковая пудра',
		'CD853F' => 'перу',
		'FAF0E6' => 'текстильный',
		'FFE4C4' => 'бисквит',
		'DEB887' => 'плотное дерево',
		'D2B48C' => 'загар',
		'FAEBD7' => 'античный белый',
		'FFDEAD' => 'белый навахо',
		'FFEBCD' => 'бланшированный миндаль',
		'FFEFD5' => 'побег папайи',
		'FFE4B5' => 'мокасиновый',
		'F5DEB3' => 'пшеничный',
		'FDF5E6' => 'старое кружево',
		'FFFAF0' => 'цветочный белый',
		'FFF8DC' => 'кукурузный волос',
		'F0E68C' => 'хаки',
		'FFFACD' => 'лимонный шифон',
		'EEE8AA' => 'бледный золотарник',
		'BDB76B' => 'темный хаки',
		'FAFAD2' => 'светло-желтый золотарник',
		'FFFFE0' => 'светло-желтый',
		'FFFFF0' => 'слоновая кость',
		'6B8E23' => 'темно-оливковый',
		'556B2F' => 'темно-оливковый зеленый',
		'8FBC8F' => 'темно-зеленое море',
		'006400' => 'темно-зеленый',
		'228B22' => 'зеленый лесной',
		'90EE90' => 'светло-зеленый',
		'98FB98' => 'бледно-зеленый',
		'F0FFF0' => 'медвяная роса',
		'2E8B57' => 'зеленое море',
		'3CB371' => 'зеленое море, нейтральный',
		'F5FFFA' => 'мятный крем',
		'66CDAA' => 'аквамариновый нейтральный',
		'7FFFD4' => 'аквамариновый',
		'2F4F4F' => 'темный грифельно-серый',
		'AFEEEE' => 'бледно-бирюзовый',
		'E0FFFF' => 'светло-голубой',
		'F0FFFF' => 'лазурный',
		'5F9EA0' => 'серо-синий',
		'B0E0E6' => 'пыльный голубой',
		'ADD8E6' => 'светло-синий',
		'87CEEB' => 'небесно-голубой',
		'87CEFA' => 'небесно-голубой светлый',
		'4682B4' => 'синяя сталь',
		'F0F8FF' => 'синяя Элис',
		'B0C4DE' => 'светло-стальной синий',
		'6495ED' => 'васильковый голубой',
		'E6E6FA' => 'лаванда',
		'F8F8FF' => 'призрачно-белый',
		'6A5ACD' => 'аспидно-синий',
		'483D8B' => 'темный аспидно-синий',
		'7B68EE' => 'нейтральный аспидно-синий',
		'9370DB' => 'фиолетовый нейтральный',
		'4B0082' => 'индиго',
		'BA55D3' => 'нейтральный цвет орхидеи',
		'DDA0DD' => 'слива светлая',
		'EE82EE' => 'розово-фиолетовый',
		'D8BFD8' => 'чертополох',
		'DA70D6' => 'орхидея',
		'FFF0F5' => 'розово-лавандовый',
		'DB7093' => 'лиловый',
		'FFB6C1' => 'светло-розовый',
		'A9A9A9' => 'темно-серый',
		'C0C0C0' => 'серебряный',
		'D3D3D3' => 'светло-серый',
		'DCDCDC' => 'геинсборо',
		'F5F5F5' => 'белый дым',
		'C8A2C8' => 'сиреневый',
		'B6B6B6' => 'металл',
		'060607' => 'иссиня-черный',
	];




	
	
	/** Преобразует текстовое значение цвета в HEX */
	public function txtToCode(string $txt): string
	{
		$txt = mb_strtolower($txt);
		$data = array_flip($this->data);
		
		return $data[$txt];
	}
	
	
	/** Преобразует HEX цвета в текст */
	public function codeToTxt(string $txt): string
	{
		$txt = mb_strtolower($txt);
		$data = $this->data;
		
		return $data[$txt];
	}
	
}