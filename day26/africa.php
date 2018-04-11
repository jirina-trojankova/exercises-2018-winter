<?php

require_once 'giraffe.php';


$martha = new giraffe('Martha');
$martha->feed();
$martha->drink();

echo $martha->name . ' is ' . ($martha->isHappy() ? '' : ' not') . ' happy<br>';

var_dump($martha);

$berta = new giraffe('Berta');
$berta->drink();

echo $berta->name . ($berta->isHappy() ? ' is' : ' is not') . ' happy<br>';

var_dump($berta);

echo 'There are ' . giraffe::$nr_of_giraffes . ' giraffes in Africa';