<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function my_autoloading_function($classname)
{
	if ($classname == "database\\database" ) {
		include '/home/jakub/www/exercises-2018-winter/day32/namespaces/database.php';
	} else
		include str_replace('\\', DIRECTORY_SEPARATOR, dirname(__FILE__) . '/' . $classname . '.php');
}
//Then you register this function so that it is called everytime a class is needed and not yet loaded:

spl_autoload_register('my_autoloading_function');


use \postgresql\connector as connector;

$my_database = new connector();
$my_database->connect();


