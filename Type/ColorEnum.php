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

enum ColorEnum : string
{
	case DEFAULT = '54B3F7'; // дефолтное значние
	
	case WHITE = 'FFFFFF'; //Белый #FFFFFF
	case BLACK = '000000'; //Чёрный Чёрный	rgb(0,0,0) 	#000000
	case GRAY = '808080'; //Серый Серый	rgb(128,128,128) 	#808080
	case RED = 'FF0000'; //Красный RED	rgb(255,0,0) 	#FF0000
	case ORANGE = 'FFA500'; //Оранжевый Оранжевый	rgb(255,165,0) 	#FFA500
	case YELLOW = 'FFFF00'; //Жёлтый YELLOW	rgb(255,255,0) 	#FFFF00
	case GREEN = '008000'; //Зелёный Зелёный	rgb(0,128,0) 	#008000
	case SKY_BLUE_DARK = '00BFFF'; //Небесно-голубой тёмный SKY_BLUE_DARK	rgb(0,191,255) 	#00BFFF
	case BLUE = '0000FF'; //Синий Синий	rgb(0,0,255) 	#0000FF
	case VIOLET = '800080'; //Фиолетовый Фиолетовый	rgb(128,0,128) 	#800080
	case PINK = 'FFC0CB'; //Розовый Розовый	rgb(255,192,203) 	#FFC0CB
	case BEIGE = 'F5F5DC'; //Бежевый BEIGE	rgb(245,245,220) 	#F5F5DC
	case OLIVE = '808000'; //Оливковый Olive	rgb(128,128,0) 	#808000
	case GOLD = 'FFD700'; //Золотой 	Золотой rgb(255,215,0) 	#FFD700
	
	case MAROON = '800000'; // Тёмно-бордовый  MAROON	rgb(128,0,0) 	#800000
	case DARK_RED = '8B0000'; // Тёмно-красный DARK_RED	rgb(139,0,0) 	#8B0000
	case FIREBRICK = 'B22222'; //Огнеупорный кирпич FIREBRICK	rgb(178,34,34) 	#B22222
	case SALMON = 'FA8072'; //Лососевый SALMON	rgb(250,128,114) 	#FA8072
	case TOMATO = 'FF6347'; //Томатный TOMATO	rgb(255,99,71) 	#FF6347
	case CORALLINE = 'FF7F50'; //Коралловый CORALLINE	rgb(255,127,80) 	#FF7F50
	case ORANGE_RED = 'FF4500'; //Оранжево-красный ORANGE_RED rgb(255,69,0) 	#FF4500
	case CHOCOLATE = 'D2691E'; //Шоколадный CHOCOLATE	rgb(210,105,30) 	#D2691E
	case SANDY_BROWN = 'F4A460';//Песочно-коричневый SANDY_BROWN	rgb(244,164,96) 	#
	case DARK_ORANGE = 'FF8C00'; //Тёмно-оранжевый DARK_ORANGE	rgb(255,140,0) 	#FF8C00
	case DARK_GOLDENROD = 'B8860B'; //Тёмный золотарник DARK_GOLDENROD	rgb(184,134,11) 	#B8860B
	case GOLDENROD = 'DAA520'; //Золотарниковый GOLDENROD	rgb(218,165,32) 	#DAA520
	
	case YELLOW_GREEN = '9ACD32'; //Жёлто-зелёный YELLOW_GREEN	rgb(154,205,50) 	#9ACD32
	case GREEN_YELLOW = 'ADFF2F'; //Зелёно-жёлтый Зелёно-жёлтый	rgb(173,255,47) 	#ADFF2F
	case CONDITION = '7FFF00'; //Шартрёз (ликёр) CONDITION (ликёр)	rgb(127,255,0) 	#7FFF00
	case GREEN_LAWN = '7CFC00'; //Зелёный газон GREEN_LAWN	rgb(124,252,0) 	#7CFC00
	
	case LIME = '00FF00'; //Лаймовый LIME	rgb(0,255,0) 	#00FF00
	case GREEN_LIME = '32CD32'; //Зелёный лайм Зелёный лайм 	rgb(50,205,50) 	#32CD32
	case SPRING_GREEN = '00FF7F'; //Весенне зелёный SPRING_GREEN	rgb(0,255,127) 	#00FF7F
	case SPRING_GREEN_NEUTRAL = '00FA9A'; //Весенне-зелёный нейтральный SPRING_GREEN_NEUTRAL	rgb(0,250,154) 	#00FA9A
	case TURQUOISE = '40E0D0'; //Бирюзовый TURQUOISE	rgb(64,224,208) 	#40E0D0
	case LIGHT_GREEN_SEA = '20B2AA'; //Светло-зелёное море LIGHT_GREEN_SEA	rgb(32,178,70) 	#20B2AA
	case TURQUOISE_NEUTRAL = '48D1CC'; //Бирюзовый нейтральный TURQUOISE_NEUTRAL	rgb(72,209,204) 	#48D1CC
	case DARK_CYAN = '008B8B'; //Тёмный циан DARK_CYAN	rgb(0,139,139) 	#008B8B
	case SEA_WAVE = '00FFFF'; //Морская волна SEA_WAVE	rgb(0,255,255) 	#00FFFF
	case DARK_TURQUOISE = '00CED1'; //Тёмно-бирюзовый DARK_TURQUOISE	rgb(0,206,209) 	#00CED1
	
	case DECEPTIVE_BLUE = '1E90FF'; //Обманчивый синий DECEPTIVE_BLUE	rgb(30,144,255) 	#1E90FF
	case ROYAL_BLUE = '4169E1'; //Королевский синий ROYAL_BLUE	rgb(65,105,225) 	#4169E1
	case NAVY = '000080'; //Военно-морского флота NAVY	rgb(0,0,128) 	#000080
	case DARK_BLUE = '00008B'; //Тёмно-синий DARK_BLUE	rgb(0,0,139) 	#00008B
	case BLUE_NEUTRAL = '0000CD'; //Cиний нейтральный BLUE_NEUTRAL	rgb(0,0,205) 	#0000CD
	
	case BLUE_VIOLET = '8A2BE2'; //Сине-фиолетовый BLUE_VIOLET	rgb(138,43,226) 	#8A2BE2
	case DARK_ORCHID = '9932CC'; //Тёмная орхидея DARK_ORCHID	rgb(153,50,204) 	#9932CC
	case DARK_VIOLET = '9400D3'; //Тёмно-фиолетовый DARK_VIOLET 	rgb(148,0,211) 	#9400D3
	
	case DARK_MAGENTA = '8B008B'; //Тёмный маджента DARK_MAGENTA	rgb(139,0,139) 	#8B008B
	case MAGENTA = 'FF00FF'; //Маджента MAGENTA	rgb(255,0,255) 	#FF00FF
	case VIOLET_RED_NEUTRAL = 'C71585'; //Фиолетово-красный нейтральный VIOLET_RED_NEUTRAL	rgb(199,21,133) 	#C71585
	case INTENSE_PINK = 'FF1493'; //Насыщенный розовый INTENSE_PINK	rgb(255,20,147) 	#FF1493
	case HOT_PINK = 'FF69B4'; //Ярко-розовый HOT_PINK	rgb(255,105,80) 	#FF69B4
	case CRIMSON = 'DC143C'; //Малиновый CRIMSON	rgb(220,20,60) 	#DC143C
	case BROWN = 'A52A2A'; //Коричневый BROWN	rgb(165,42,42) 	#A52A2A
	case RED_INDIAN = 'CD5C5C'; //Красный индийский RED_INDIAN	rgb(205,92,92) 	#CD5C5C
	case PINK_BROWN = 'BC8F8F'; //Розово-коричневый PINK_BROWN	rgb(188,143,143) 	#BC8F8F
	case LIGHT_CORAL = 'F08080'; //Светло-коралловый LIGHT_CORAL	rgb(240,128,128) 	#F08080
	case SNOW = 'FFFAFA'; //Снег SNOW	rgb(255,250,250) 	#FFFAFA
	case MISTY_ROSE = 'FFE4E1'; //Туманная роза MISTY_ROSE	rgb(255,228,225) 	#FFE4E1
	case DARK_SALMON = 'E9967A'; //Тёмный лосось DARK_SALMON 	rgb(233,150,122) 	#E9967A
	case LIGHT_SALMON = 'FFA07A'; //Светлый лосось LIGHT_SALMON	rgb(255,160,122) 	#FFA07A
	case OCHER = 'A0522D'; //Охра Охра	rgb(160,82,45) 	#A0522D
	case SEA_SHELL = 'FFF5EE'; //Морская ракушка SEA_SHELL	rgb(255,245,238) 	#FFF5EE
	case SADDLE_BROWN = '8B4513'; //Седло Браун SADDLE_BROWN	rgb(139,69,19) 	#8B4513
	case PEACH_POWDER = 'FFDAB9'; //Персиковая пудра PEACH_POWDER	rgb(255,218,185) 	#FFDAB9
	case PERU = 'CD853F'; //Перу PERU	rgb(205,133,63) 	#CD853F
	case TEXTILE = 'FAF0E6'; //Текстильный TEXTILE	rgb(250,240,230) 	#FAF0E6
	case BISCUIT = 'FFE4C4'; //Бисквит BISCUIT	rgb(255,228,196) 	#FFE4C4
	case DENSE_TREE = 'DEB887'; //Плотное дерево DENSE_TREE	rgb(222,184,135) 	#DEB887
	case TAN = 'D2B48C'; //Загар TAN	rgb(210,180,140) 	#D2B48C
	case ANTIQUE_WHITE = 'FAEBD7'; //Античный белый ANTIQUE_WHITE 	rgb(255,235,215) 	#FAEBD7
	case WHITE_NAVAJO = 'FFDEAD'; //Белый навахо WHITE_NAVAJO	rgb(255,222,173) 	#FFDEAD
	case BLANCHED_ALMONDS = 'FFEBCD'; //Бланшированный миндаль BLANCHED_ALMONDS	rgb(255,235,205) 	#FFEBCD
	case PAPAYA_SHOOT = 'FFEFD5'; //Побег папайи PAPAYA_SHOOT	rgb(255,239,213) 	#FFEFD5
	case MOCCASIN = 'FFE4B5'; //Мокасиновый MOCCASIN	rgb(255,228,181) 	#FFE4B5
	case WHEATEN = 'F5DEB3'; //Пшеничный WHEATEN	rgb(245,222,179) 	#F5DEB3
	case OLD_LACE = 'FDF5E6'; //Старое кружево OLD_LACE	rgb(253,245,230) 	#FDF5E6
	case FLORAL_WHITE = 'FFFAF0'; //Цветочный белый FLORAL_WHITE	rgb(255,250,240) 	#FFFAF0
	case CORN_HAIR = 'FFF8DC'; //Кукурузный волос CORN_HAIR	rgb(255,248,220) 	#FFF8DC
	case KHAKI = 'F0E68C'; //Хаки 	KHAKI rgb(240,230,140) 	#F0E68C
	case LEMON_CHIFFON = 'FFFACD'; //Лимонный шифон LEMON_CHIFFON	rgb(255,250,205) 	#FFFACD
	case PALE_GOLDENROD = 'EEE8AA'; //Бледный золотарник PALE_GOLDENROD	rgb(238,232,170) 	#EEE8AA
	case DARK_KHAKI = 'BDB76B'; //Тёмный хаки DARK_KHAKI	rgb(189,183,107) 	#BDB76B
	
	case LIGHT_YELLOW_GOLDENROD = 'FAFAD2'; //Светло-жёлтый золотарник LIGHT_YELLOW_GOLDENROD	rgb(250,250,210) 	#FAFAD2
	case LIGHT_YELLOW = 'FFFFE0'; //Светло-жёлтый LIGHT_YELLOW	rgb(255,255,224) 	#FFFFE0
	case IVORY_BLACK = 'FFFFF0'; //Слоновая кость IVORY_BLACK	rgb(255,255,240) 	#FFFFF0
	case DARK_OLIVE = '6B8E23'; //Тёмно-оливковый DARK_OLIVE	rgb(107,142,35) 	#6B8E23
	case DARK_OLIVE_GREEN = '556B2F'; //Тёмно-оливковый зелёный DARK_OLIVE_GREEN	rgb(85,107,47) 	#556B2F
	case DARK_GREEN_SEA = '8FBC8F'; //Тёмно-зелёное море DARK_GREEN_SEA	rgb(143,188,143) 	#8FBC8F
	case DARK_GREEN = '006400'; //Тёмно-зелёный DARK_GREEN	rgb(0,100,0) 	#006400
	case FOREST_GREEN = '228B22'; //Зелёный лесной FOREST_GREEN	rgb(34,139,34) 	#228B22
	case LIGHT_GREEN = '90EE90'; //Светло-зелёный LIGHT_GREEN	rgb(144,238,144) 	#90EE90
	case PALE_GREEN = '98FB98'; //Бледно-зелёный PALE_GREEN 	rgb(152,251,152) 	#98FB98
	case HONEYDEW = 'F0FFF0'; //Медвяная роса HONEYDEW	rgb(240,255,240) 	#F0FFF0
	case GREEN_SEA = '2E8B57'; //Зелёное море GREEN_SEA	rgb(46,139,87) 	#2E8B57
	case GREEN_SEA_NEUTRAL = '3CB371'; //Зелёное море, нейтральный GREEN_SEA_NEUTRAL	rgb(60,179,113) 	#3CB371
	case MINT_CREAM = 'F5FFFA'; //Мятный крем MINT_CREAM	rgb(245,255,250) 	#F5FFFA
	case AQUAMARINE_NEUTRAL = '66CDAA'; //Аквамариновый нейтральный AQUAMARINE_NEUTRAL	rgb(102,205,170) 	#66CDAA
	case AQUAMARINE = '7FFFD4'; //Аквамариновый AQUAMARINE	rgb(127,255,212) 	#7FFFD4
	case DARK_SLATE_GRAY = '2F4F4F'; //Тёмный грифельно-серый DARK_SLATE_GRAY	rgb(47,79,79) 	#2F4F4F
	case PALE_TURQUOISE = 'AFEEEE'; //Бледно-бирюзовый PALE_TURQUOISE	rgb(179,238,238) 	#AFEEEE
	case LIGHT_BLUE = 'E0FFFF'; //Светло-голубой LIGHT_BLUE	rgb(224,255,255) 	#E0FFFF
	case AZURE = 'F0FFFF'; //Лазурный AZURE	rgb(245,255,255) 	#F0FFFF
	case GREY_BLUE = '5F9EA0'; //Серо-синий GREY_BLUE	rgb(95,158,160) 	#5F9EA0
	case DUSTY_BLUE = 'B0E0E6'; //Пыльный голубой DUSTY_BLUE	rgb(176,224,230) 	#B0E0E6
	case LIGHT_DARK_BLUE = 'ADD8E6'; //Светло-синий LIGHT_DARK_BLUE	rgb(173,216,230) 	#ADD8E6
	case CELESTIAL_BLUE = '87CEEB'; //Небесно-голубой CELESTIAL_BLUE	rgb(135,206,235) 	#87CEEB
	case SKY_BLUE_LIGHT = '87CEFA'; //Небесно-голубой светлый SKY_BLUE_LIGHT	rgb(135,206,250) 	#87CEFA
	case BLUE_STEEL = '4682B4'; //Синяя сталь BLUE_STEEL	rgb(70,130,180) 	#4682B4
	case BLUE_ALICE = 'F0F8FF'; //Синяя Элис BLUE_ALICE	rgb(240,248,255) 	#F0F8FF
	case GRAY_SLATE = '708090'; //Серый шифер GRAY_SLATE	rgb(112,128,144) 	#708090
	case LIGHT_GRAY_SLATE = '778899'; //Светло-серый шифер LIGHT_GRAY_SLATE	rgb(119,136,153) 	#778899
	case LIGHT_STEEL_BLUE = 'B0C4DE'; //Светло-стальной синий LIGHT_STEEL_BLUE	rgb(176,196,222) 	#B0C4DE
	case CORNFLOWER_BLUE = '6495ED'; //Васильковый голубой CORNFLOWER_BLUE	rgb(100,149,237) 	#6495ED
	case LAVENDER = 'E6E6FA'; //Лаванда LAVENDER	rgb(230,230,250) 	#E6E6FA
	case GHOST_WHITE = 'F8F8FF'; //Призрачно-белый GHOST_WHITE	rgb(248,248,255) 	#F8F8FF
	case MIDNIGHT_BLUE = '191970'; //Полуночный синий MIDNIGHT_BLUE	rgb(25,25,112) 	#191970
	case SLATE_BLUE = '6A5ACD'; //Аспидно-синий Аспидно-синий 	rgb(106,90,205) 	#6A5ACD
	case DARK_SLATE_BLUE = '483D8B'; //Тёмный аспидно-синий Тёмный аспидно-синий	rgb(72,61,139) 	#483D8B
	case NEUTRAL_SLATE_BLUE = '7B68EE'; //Нейтральный аспидно-синий Нейтральный аспидно-синий	rgb(123,104,238) 	#7B68EE
	case PURPLE_NEUTRAL = '9370DB'; //Фиолетовый нейтральный Фиолетовый нейтральный 	rgb(147,112,219) 	#9370DB
	case INDIGO = '4B0082'; //Индиго 	Индиго rgb(75,0,130) 	#4B0082
	case NEUTRAL_ORCHID = 'BA55D3'; //Нейтральный цвет орхидеи Нейтральный цвет орхидеи	rgb(186,85,211) 	#BA55D3
	case PLUM_LIGHT = 'DDA0DD'; //Слива светлая Слива светлая	rgb(221,160,221) 	#DDA0DD
	case PINK_PURPLE = 'EE82EE'; //Розово-фиолетовый Розово-фиолетовый	rgb(238,130,238) 	#EE82EE
	case THISTLE = 'D8BFD8'; //Чертополох Чертополох	rgb(216,191,216) 	#D8BFD8
	case ORCHID = 'DA70D6'; //Орхидея Орхидея	rgb(218,112,214) 	#DA70D6
	case PINK_LAVENDER = 'FFF0F5'; //Розово-лавандовый Розово-лавандовый	rgb(255,240,245) 	#FFF0F5
	case PURPLE = 'DB7093'; //Лиловый Лиловый	rgb(219,112,147) 	#DB7093
	
	case LIGHT_PINK = 'FFB6C1'; //Светло-розовый Светло-розовый	rgb(255,182,193) 	#FFB6C1
	
	case DULL_GRAY = '696969'; //Тускло-серый Тускло-серый	rgb(105,105,105) 	#696969
	
	case DARK_GRAY = 'A9A9A9'; //Тёмно-серый Тёмно-серый	rgb(169,169,169) 	#A9A9A9
	case SILVER = 'C0C0C0'; //Серебряный Серебряный	rgb(192,192,192) 	#C0C0C0
	case LIGHT_GRAY = 'D3D3D3'; //Светло-серый Светло-серый	rgb(211,211,211) 	#D3D3D3
	case GAINSBOROUGH = 'DCDCDC'; //Геинсборо Геинсборо	rgb(220,220,220) 	#DCDCDC
	case WHITE_SMOKE = 'F5F5F5'; //Белый дым Белый дым	rgb(245,245,245) 	#F5F5F5
	case LILAC = 'C8A2C8'; //Сиреневый	rgb(245,245,245) 	#F5F5F5
	case STEEL = 'B6B6B6'; //Сиреневый	rgb(245,245,245) 	#F5F5F5
	case BLUE_BLACK = '060607'; //иссиня-черный	rgb(245,245,245) 	#F5F5F5
	
}