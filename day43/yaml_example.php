<?php

header('Content-type: text/plain');

$data = array(
	'boolean' => true,
	'config' => array(
		'URL' => 'http://mysite.com',
		'host' => 'localhost',
		'port' => 80
	),
	'environment' => 'development',
	'info' => array(
		'contact' => array(
			array(
				'name' => 'Steve',
				'position' => 'owner'
			),
			array(
				'name' => 'Bob',
				'position' => 'developer'
			)
		),
		'address' =>
			'Data4You
Krakovská 9,
Praha 1',
		'established' => 2015
	)
);

// include the library
require_once('Spyc.php');

$yaml_string = Spyc::YAMLDump($data, 2); // 2 = indent size
echo $yaml_string;

echo "\n\n\nhere comes some JSON\n\n";

echo json_encode($data);
