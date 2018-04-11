<?php

// open the file for writing
$fh = fopen('file.csv', 'w');

// the data to write (an array of arrays)
$data = array(
	array('Bob', 'Huffy', '1982', 'fighter pilot'),
	array('Anna', 'Smith', '1986', 'waitress')
);

foreach($data as $fields)
{
	fputcsv($fh, $fields, ';', '"'); // file handle, fields, delimiter, string enclosure
}



// open the file for reading
$fh = fopen('file.csv', 'r');

// while there are lines to be read
while($line = fgetcsv($fh, null, ';', 0, '"')) // file handle, delimiter, string enclosure
{
	var_dump($line); // array
}


$file_handler = fopen('http://www.cnb.cz/cs/financni_trhy/devizovy_trh/kurzy_devizoveho_trhu/denni_kurz.txt', 'r');
while($line = fgetcsv($file_handler, null, '|', 0, '"')) // file handle, delimiter, string enclosure
{
	var_dump($line); // array
}


