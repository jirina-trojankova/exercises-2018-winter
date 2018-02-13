<?php

// require the database library
require_once 'database.php';

$country_code = $_GET['code'];

$query = "
    SELECT *
    FROM `city`
    WHERE `CountryCode` = ?
    ORDER BY `Name` ASC
";
$cities = db_query($query, [
    $country_code
]);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Countries</title>
</head>
<body>

    <ul>
        <?php foreach($cities as $city) : ?>
            <li>
                <?php echo $city['Name']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>