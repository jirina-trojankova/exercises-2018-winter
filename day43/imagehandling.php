<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$source = imagecreatefromjpeg('hovercat.jpg');

$target = imagecreatetruecolor(100, 100);

list($source_width, $source_height) = getimagesize('hovercat.jpg');

imagecopyresized($target, $source, 0, 0, 0, 0, 100, 100, $source_width, $source_height);

// White background and blue text
$textcolor = imagecolorallocate($target, 0, 0, 255);

// Write the string at the top left
imagestring($target, 5, 0, 0, 'Hello world!', $textcolor);

header('Content-type: image/jpeg');
imagejpeg($target, null, 90);