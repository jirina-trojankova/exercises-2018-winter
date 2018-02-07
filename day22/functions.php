<?php

// declaration/definition
function greet($whom)
{
    return 'Hello, ' . $whom . '!';
}

// call to the function greet
$var = greet('Prague');
$var = 'Hello, Prague!'; // result of the line above
    // because greet('Prague') returns 'Hello, Prague!'

if(!$var)
{
    echo $var;
    echo $var;
    echo $var;
    echo $var;
}


function print_copyright()
{
    echo '&copy; 2018';
}

print_copyright();


function headline($text)
{
    return '<h1>' . $text . '</h1>';
}

echo headline('My website');

// variable scope

$my_variable = 123; // declare variable in global scope

function foo() {
    global $my_variable; // import variable from global scope
                         // before you use it
    echo $my_variable; // use the variable
}

foo(); // call the function