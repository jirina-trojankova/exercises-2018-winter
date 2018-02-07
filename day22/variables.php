<?php

$my_greeting = "Hello, world!";

echo $my_greeting;


$html_code = "<h1>My first PHP file</h1>"; // create variable

echo $html_code; // exists here

unset($html_code); // destroy the variable $html_code
// $html_code does not exist any more

// echo $html_code; // the variable does not exist any more

$first_name = 'Bruce';
$surname = 'Wayne';

$year_of_birth = 1982;
$height = 186;

define('SERVER_SOFTWARE', 'Apache');

// string to number
$number = (integer)'123honza'; // 123

$number = (integer)'honza123'; // 0

// string to boolean
$boolean = (boolean)'honza'; // true

$boolean = (boolean)''; // false

// number to boolean
$boolean = (boolean)123; // true
$boolean = (boolean)0.1; // true

$boolean = (boolean)0; // false

$string = 'Bruce';

$number = 1;

$number += 2;
$number = $number + 2; // same as above

$string .= ' Wayne';
$string = $string . ' Wayne'; // same as above

?>
<p>
    First name: <?php echo $first_name; ?><br>
    Surname: <?php echo $surname; ?><br>
    <br>
    Year of birth: <?= $year_of_birth ?><br>
    Height: <?= $height ?>
</p>
<p>
    My server software is <?php echo SERVER_SOFTWARE; ?>

</p>