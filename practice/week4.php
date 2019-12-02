<?php

$wuarter_value = .25;

$moves = ['rock', 'paper', 'scissors'];

$strawLengths = [2, 2, 2, 2, 2, 2, 1];

$guesses = [];

// echo $moves[0];
// echo $moves[1];
// echo $moves[2];
// echo $moves[3];
//var_dump($moves);

//$randomNumber = rand(0, 2);

//var_dump($moves[$randomNumber]);

// $coinValues = [
//     'pennies' => .01,
//     'nickels' => .05,
//     'dimes' => .10,
//     'quarters' => .25,
//     'halfDollars' => .50
// ];

// $coinCounts = [
//     'pennies' => 300,
//     'nickels' => 5,
//     'dimes' => 0,
//     'quarters' => 125,
//     'halfDollars' => 50,
// ];


//var_dump($coinValues);
//var_dump($coinValues['dimes']);

// var_dump($coinCounts);

// //asort($coinCounts);
// //arsort($coinCounts);
// krsort($coinCounts);

// var_dump($coinCounts);

// shuffle($cards);
// var_dump($cards);

#Version A
$coins = [
    'pennies' => [.01, 300],
    'nickels' => [.05, 5],
    'dimes' => [.10, 0],
    'quarters' => [.25, 125],
    'halfDollars' => [.50, 50]
];

$total = 0;
foreach($coins as $coin => $info) {
    $total = $total + ($info[1] * $info[0]);
}


#Version B
$coins = [
    'pennies' => [
        'value' => .01, 
        'count' => 300
    ],
    'nickels' => [
        'value' => .05, 
        'count' => 5
    ],
    'dimes' => [
        'value' => .10, 
        'count' => 0
    ],
    'quarters' => [
        'value' => .25, 
        'count' => 125
    ],
    'halfDollars' => [
        'value' => .50, 
        'count' => 50
    ]
];

$total = 0;
foreach($coins as $coin => $info) {
    $total = $total + ($info['count'] * $info['value']);
}

// $total = 0;
// foreach($coinCounts as $coin => $count) {
//     $total = $total + ($count * $coinValues[$coin]); 
// }

//var_dump($total);

// $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// shuffle($cards);
// // var_dump($cards);
// // var_dump(array_pop($cards));
// // var_dump($cards);

// $player1Cards = array_splice($cards, 0, 5);
// $player2Cards = $cards;

// var_dump($player1Cards);
// var_dump($player2Cards);

//var_dump(date('F j Y'));
//var_dump(strtoupper('AbCDDDDD'));

//var_dump(rand(0,10));

var_dump($total <= 30 or $total > 50);

