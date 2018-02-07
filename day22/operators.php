<?php

$inches = 12;

$centimeters = $inches * 2.54;

echo $centimeters . ' cm';

echo '<br>';

$celsius = 100;

$fahrenheit = (9/5) * $celsius + 32;

echo $fahrenheit . '&deg; F';


$number = 0;
$number++; // 1
var_dump(1);
// 1

$number = 0;
var_dump($number++); // first use the initial value and THEN raise

$number = 0;
var_dump(++$number); // first raise and THEN use


$number = 0;
$other_number = $number++;
var_dump($other_number); // 0
var_dump($number); // 1

$number = 0;
$other_number = ++$number;
var_dump($other_number); // 1
var_dump($number); // 1


$other_number = $number++; // assign then raise
($other_number = $number); $number++;  // same as above

$other_number = ++$number; // raise then assign
$other_number = (++$number); // same as above

echo '<hr>';

$temperature = 36.5;
// $result = $temperature > 37 ? 'ill' : 'healthy';
echo 'I am ' .($temperature > 37 ? 'ill' : 'healthy');

echo '<hr>';

$number = 42;
$even_or_odd = ( $number % 2 ? 'odd' : 'even' );
echo 'The number ' . $number . ' is ' . $even_or_odd;

echo '<hr>';

$weekday = 'Tuesday';
echo 'Today is ' . $weekday;

echo '<hr>';

$year_of_birth = 1982;
$age = 35;

echo 'I was born in ' . $year_of_birth . ' so I am ' . $age . ' years old';

echo '<hr>';



?>
