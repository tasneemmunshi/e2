<?php

# Guess the magic number from 1 to 10!

$number = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];

$randomNumber = rand(0, 9);

//var_dump($number[$randomNumber]);

$magicNumber = ($number[$randomNumber]);

echo $magicNumber;

