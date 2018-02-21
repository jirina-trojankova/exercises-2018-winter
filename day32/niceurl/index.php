<?php
session_start();

echo 'this is $_GET ';
var_dump($_GET);


if (isset($_GET['user'])) {
	$_SESSION['user'] = $_GET['user'];
	$_SESSION['last_time_user_was_seen'] = date('Y-m-d H:i:s');
}

if (false !== ($pos = strpos($_SERVER['REQUEST_URI'], '/user/'))) {
	$_SESSION['user'] = substr($_SERVER['REQUEST_URI'], $pos + 6);
	$_SESSION['last_time_user_was_seen'] = date('Y-m-d H:i:s');
}

echo 'this is $_SESSION ';
var_dump($_SESSION);
