<?php

require '../database.php';

// change the name of the database because in database.php
// I have it set to 'world'
$db_database = 'portfolio';

// amazing logic to handle the incoming data $_POST
var_dump($_POST);

// gather data from POST
$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : null;
$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$text = isset($_POST['text']) ? $_POST['text'] : null;

// save the data somewhere
$query = "
    INSERT
    INTO `messages`
    (`first_name`, `last_name`, `email`, `phone`, `text`)
    VALUES
    (?, ?, ?, ?, ?)
";
db_query($query, [
    $first_name,
    $last_name,
    $email,
    $phone,
    $text  
]);


// redirect back to whence it came
header("Location: index.html");
exit();