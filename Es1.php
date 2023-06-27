<?php
// Esercitazione 27/06/2023

//Esercizio 1

/*
const DATO1 = 1;
const DATO2 = 2.45; 
const DATO3 = true; 
const DATO4 = "buongiorno";

var_dump(DATO1, DATO2, DATO3, DATO4);
*/

//Esercizio 2

/*
$text1 = "Marco ";
$text2 = "hai ";
$text3 = "sete";
$text4 = "? ";
$text5 = "Perchè ";
$text6 = "$text2";
$text7 = "bevuto ";
$text8 = "tutto"; 

var_dump($text1 . $text2 . $text3 . $text4 . $text5 . $text6 . $text7 . $text8);
*/

//Esercizio3

/*
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

$result = $words1[6][3][1][1]." ".$words1[6][3][0]." del ".$words1[6][3][1][0]." di ".$words2["elemento2"]." ".$words1[2]." ".$words1[4]." ".$words1[6][4]." ".$words1[6][5]." ".$words1[6][3][1][2][2][1]." ".$words1[6][3][1][2][0]." ".$words1[6][0].", ".$words2["elemento3"][2]." ".$words1[6][3][1][2][1]." ".$words1[7]." ".$words1[6][3][1][2][2][0]." ".$words1[6][1]." ".$words2["elemento3"][1];

var_dump($result);
*/