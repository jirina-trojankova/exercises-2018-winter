<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// one resource for reading
$file_handler = fopen('https://www.codingbootcamp.cz/img/man.png', 'r');
var_dump($file_handler);

//one for writing
$file_handler_to = fopen('./mydownloadedimage.png', 'w');
var_dump($file_handler_to);

while (!feof($file_handler))
{
	$part_of_file = fread($file_handler, 1024);
	fwrite($file_handler_to, $part_of_file);
}
