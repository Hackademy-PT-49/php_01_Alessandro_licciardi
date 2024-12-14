<?php

$num = 5;

var_dump($num);


$bool = true;

var_dump($bool);



$float = 0.8;


var_dump($float);



$string = "sono una stringa forse";

var_dump($string);



$text1 = "Marco";

$text2 = "hai";

$text3 = "sete";

$text4 = "?";

$text5 = "Perchè";

$text6 = $text2;

$text7 = 'bevuto';

$text8 = "tutto";


var_dump($text1 . " " . $text2 . " " . $text3 . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8);



$words1 = [
	'una',
	67,
	'vita',
	'colle',
	'mi',
	'rosso',
	[
	'oscura',
	'era',
	89,
		[
		'mezzo',
			[
			'cammin',
			'Nel',
				[
				'selva',
				'la',
					[
					'via',
					'una',
					true,
					]
				],
			]
		],
	'ritrovai',
	'per'
	],
	'diritta'
];


$words2 = [
 'elemento1' => 25.89,
 'elemento2' => 'nostra',
 'elemento3' => [
  'Virgilio',
  'smarrita',
  'ché'
 ]
];



print_r($words1);

echo $words1([6][3][1][1] . " " . [6][3][0]);