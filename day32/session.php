<?php

session_start();

echo 'this is $_GET ';
var_dump($_GET);
echo 'this is $_SESSION ';
var_dump($_SESSION);

if (isset($_GET['user'])) {
	$_SESSION['user'] = $_GET['user'];
	$_SESSION['last_time_user_was_seen'] = date('Y-m-d H:i:s');
}