<?php

// require functions to visualize arrays
require_once 'var_show.php';

$fruit = ['Apple', 'Pear', 'Orange'];

$fruit_colors = [
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
];

// var_show($fruit);
//var_show($fruit_colors);

$cars_i_want = [
    'Aston Martin',
    'Bugatti',
    'Ferrari',
    'Lamborghini',
    'Maserati',
    'Mercedes',
    'Porsche',
    'Skoda'
];

var_show($cars_i_want);

echo 'For myself I would buy ' . $cars_i_want[1] . '.<br>';

echo 'For my spouse I would buy ' . $cars_i_want[3] . '.<br>';

$cars_i_want[4] = 'Smart';

var_show($cars_i_want);

echo 'Each of my kids will get a ' . $cars_i_want[4] . '.<br>';

echo '<ul>'; // begin list

// for each car in cars i want
foreach($cars_i_want as $car_name)
{
    // print one list item
    echo '<li>' . $car_name . '</li>';
}

echo '</ul>'; // end list


shuffle($cars_i_want);

var_show($cars_i_want);