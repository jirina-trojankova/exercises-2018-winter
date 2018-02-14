<?php

// following two lines just force the script to output all level errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: text/plain');

// first get object with DB connection
$my_db_handle = new PDO(
	'mysql:host=localhost;dbname=world', // connection string
	'dev', //username
	'' //password
);

var_dump($my_db_handle);

$my_db_handle->query('USE world');

// then get object with query result
$my_statement = $my_db_handle->query(
	'SELECT * FROM city WHERE Name = "Praha" LIMIT 1');

var_dump($my_statement);

// last fetching the data (one object of one row)
var_dump($my_statement->fetchObject());

// then get object with query result
$my_statement = $my_db_handle->query(
	'SELECT * FROM city WHERE CountryCode = "CZE"');


// last fetching the data (array containing set of arrays)
var_dump($my_statement->fetchAll());