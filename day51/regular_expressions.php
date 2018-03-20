<?php

header('Content-type: text/plain');

echo "\n\n     validate phone number\n\n";


$phone_numbers = [
	'234567890',
  'blahblah',
	'i was born the 19802612 man',
	1,
	777235822,
	234567889,
	
];

foreach ($phone_numbers as $number) {
	
	echo "\n$number: ";
	
//	'/^[0-9]{9}$/' only numbers
	
	if (preg_match('@^[0-9]{9,10}$@', $number)) {
		echo "OK ";
		
		if (preg_match('@^[6,7][0-9]{8}$@', $number)) {
			echo " cell phone ";
		} else {
			echo " home line ";
		}
		
		
	} else {
		echo "NG ";
	}
	

}


echo "\n\n\n     get TLD\n\n";

$domain = 'classes.codingbootcamp.cz';
// ([^\.]+) anything what is not a dot
// \. one dot
// ([a-z]{2,}) small case letters, at least two of them
// $ end of the string
preg_match('/([^\.]+)\.([a-z]{2,})$/', $domain, $matches);
var_dump($matches);


echo "\n\n\n     replace\n\n";


// sanitize phone number
$number = 'hey, my number is: +420 777 235   822';
echo preg_replace('/[^0-9]/', '', $number) , "\n\n";

// URL to cache filename
$url = 'https://en.wikipedia.org/wiki/Resident_Evil:_Apocalypse';
echo preg_replace('/[^-a-z\.]+/i', '_', $url) , "\n\n";


preg_match_all('@<img\s[^>]*src="(//upload\.wikimedia\.org[^"]+)@ims', file_get_contents($url), $matches);
var_dump($matches[1]);