<?php

// require the database library
require_once 'database.php';

$query = "
    SELECT *
    FROM `country`
    ORDER BY `Name` ASC
";
$countries = db_query($query);

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
        <?php foreach($countries as $country) : ?>
            <li>
                <a href="cities.php?code=<?php echo $country['Code']; ?>">
                    <?php echo $country['Name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>