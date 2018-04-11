<?php

$number_of_errors = 0;

function log_error1()
{
	global $number_of_errors;
	$number_of_errors++;
}

function log_error2(&$number_of_errors)
{
	$number_of_errors++;
}

function log_error3($number_of_errors)
{
	global $number_of_errors;
	
	$number_of_errors2 = &$number_of_errors;
	$number_of_errors2++;
}

log_error1($number_of_errors);
log_error2($number_of_errors);
log_error3($number_of_errors);

echo $number_of_errors; // 2

echo "\n\n\n\n";

//Exercise
//Declare a variable $messages in the global scope and initialize it's value to an empty array ([])

$messages = [];

//Write a function add_message that would accept one argument - the text of a new message and add that message as the next item to the array $messages
function add_message($message = 'Empty message') // here the 'Foo' from line 52 became $message variable inside function
{
	global $messages;
	
	$messages[] = $message;
}

function add_message2($message = 'Empty message')
{
	global $messages;
	
	array_push($messages, $message);
}

add_message('Foo');
add_message2();
add_message('Horray');

var_dump($messages); // [0 => 'Foo']

echo "\n\n\n\n";
/*Exercise
Write a function divmod that would calculate the division of 2 values and at the same time return the remainder (result of the modulus operation).

It would take three arguments: two numbers passed by value (division operands) and a variable $remainder passed by reference.

The function will return the result of the division of the first two.

In the third argument it will place the modulus of the first two arguments, effectively returning 2 different values.

It should work like this:*/
function divmod($dividend, $divisor, &$modulus)
{
	if ($divisor == 0) {
		// option 1
		echo 'Not possible to divide by zero!!!';
		return false;
		
		// option 2
		die('Not possible to divide by zero!!!');
		
		// option 3
		throw new Exception('Not possible to divide by zero!!!');
	}
	
	$modulus = $dividend % $divisor;
	
	return $dividend / $divisor;
}

$modulus = null;
$result = divmod(3, 2, $modulus);
echo $result; // 1.5
echo $modulus; // 1


echo "\n\n\n\n";



function raise_value($value, $raise_by = 1, $divide_by = 1, $multiply_by = 1, $add_newline = false)
{
	$result = (($value + $raise_by) / $divide_by) * $multiply_by;
	
	if ($add_newline)
	{
		$result .= "\n";
	}
	
	return $result;
}

echo raise_value(1, 2) , "\n"; // 3
echo raise_value(1) , "\n"; // 2
echo raise_value(1, 1, 1, 1) , "\n"; // 2
echo raise_value(1, 1, 1, 5, true) , "\n"; // 10
echo raise_value(1, 2, 3, 4) , "\n"; // 4


echo "\n\n\n\n";

// not sanitized
function headline1($headline, $level = 1)
{
	return "<h{$level}>{$headline}</h{$level}>\n";
}

// sanitized
function headline2($headline, $level = 1)
{
	$headline = htmlspecialchars($headline);
	
	return sprintf("<h%d>%s</h%d>\n", $level, $headline, $level);
}

// sanitized, simplified ;-]
function headline3($headline, $level = 1)
{
	$headline = htmlspecialchars($headline);

	return sprintf('<h%1$d>%2$s</h%1$d>', $level, $headline);
}

echo headline1('Some Headline', 'blebleble');
echo headline2('</h1><p>Some Headline</p>', 'sdfdsfsd');



// http://mywebsite.com/myscript.php?id=1
// http://mywebsite.com/myscript.php?id=;DELETE FROM my_table WHERE 1
$query = 'SELECT * FROM my_table WHERE index = ' . $_GET['id'];
$query = sprintf('SELECT * FROM my_table WHERE index = %d', $_GET['id']);


$my_var = "tra\nl\nala";
$my_vari = 'tralala';
echo "$my_var or more safe {$my_var}i can also add new line \n or a \t tab \t
but now i dont want to print the variable contents, just its name \$my_var\n";

echo '$my_var or more safe {$my_var} i can also add new line \n or a \t tab \t
but now i dont want to print the variable contents, just its name \$my_var\n';

echo "hello " . "jakub" , " and Tomas";