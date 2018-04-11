<?php

header('Content-type: text/plain');

//var_dump( pathinfo( __FILE__ ) );
//
//var_dump( basename( __FILE__ ) );
//var_dump( dirname( __FILE__ ) );



//$result = scandir(__DIR__ . '/..');
//var_dump($result);

function list_directory($directory)
{
	$directory_handler = opendir($directory);
	
	while (false !== ($file = readdir($directory_handler))) {
		
		if ($file == '.' || $file == '..') continue;
		
		if (strpos($file, '.') === 0) continue;
		
		
		// DIRECTORY_SEPARATOR  will contain / or \
		$full_file_path = realpath($directory . DIRECTORY_SEPARATOR . $file);
		echo "$full_file_path\n";
		
		if (is_dir($full_file_path)) {
			list_directory($full_file_path);
		}
		
	}
}

list_directory(__DIR__ . '/..');