<?php

// $weather = 'raining';
$weather = 'sunny';
// $weather = 'windy';
// $weather = 'meh';

if($weather == 'raining')
{
    echo 'Let\'s stay indoors';
}
elseif($weather == 'sunny')
{
    echo 'Let\'s put on some sunblock';
}
elseif($weather == 'windy')
{
    echo 'Let\'s put on a coat';
}
else
{
    echo "Let's go outside";
}


// the following are all true (all considered empty)
0 == "";
0 == false;
0 == [];
0 == null;
false == null;
false == [];
"" == [];
"" == false;
"aa" == true;
123 == true;
0 == false;

// the following are all false
0 === "";
0 === false;
0 === [];
0 === null;
false === null;
false === [];
"" === [];

!0 == 1; // true

echo '<hr>';

$language = 'php';

switch($language)
{
    case 'php': 
    case 'ruby': 
        echo 'serverside'; // code that will run when it is php OR ruby
        break;
    case 'JavaScript': 
        echo 'clientside'; // code that will run when it is JavaScript
        break;
    default:
        echo "I don't know"; // code that will run when no other case matched
        break;
}

echo '<hr>';

$operating_system = 'Windows';

switch($operating_system)
{
    case 'Windows': echo 'Edge'; break;
    case 'Linux': echo 'Firefox'; break;
    case 'OS X': echo 'Safari'; break;
    default: echo 'Just use Chrome'; break;
}

echo '<hr>';

// person:
$age = 84;
$gender = 'f';
$employed = true;

if($age < 25)
{
    // ...
}

// if the person is employed
if($employed)
{
    // ...
}

// if age is above 34 and not employed
if($age > 34 && !$employed)
{
    // ...
}
// if the age is not greater than 18
if($age <= 18)
{
    // ...
}

if(!($age > 18))
{
    // ...
}

// if the age is lower than 12 and gender is female
if($age < 12 && $gender == 'f')
{
    // ...
}

// if age is greater or equal to 18 and is not employed
if($age >= 18 && !$employed)
{
    // ...
}

// if age is greater or equal to 60, is employed and is a female
if($age >= 60 && $employed && $gender == 'f')
{
    // ...
}

// if (someone) is a male above 20 or is an unemployed female above 25
if(($gender == 'm' && $age > 20) || (!$employed && $gender == 'f' && $age > 25) )
{
    // ...
}

// AND, &&
if(true && true && true)
{
    // this will run
}

// OR, ||
if(false || false || true) // at least one part of expression must be true
{
    // this will run
}

if(false AND $number > 1) // 2 > 1 will not get evaluated at all
{
    // this will NOT run
}

if($current_page == 'administration' AND user_is_administrator()) // user_is_administrator() will not be run here
{

}

true;
false;

$today == 'sunday' OR open_shop(); // open shop on all days except sunday

$today == 'monday' AND open_shop(); // open shop only on monday