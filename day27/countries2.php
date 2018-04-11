<?php

// require the database library
require_once 'database.php';

class country
{
    public function generateUrl()
    {
        return 'cities.php?' . http_build_query(['code' => $this->Code]);
    }
}

$query = "
    SELECT *
    FROM `country`
    ORDER BY `Name` ASC
";
$pdo = db_connect($db_database);
$statement = $pdo->prepare($query); // prepare the query
$statement->execute($values);
$statement->setFetchMode(PDO::FETCH_CLASS, 'country'); // set the type of results
$countries = $statement->fetchAll(); // get all results as an array

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
                <a href="<?php echo $country->generateUrl(); ?>">
                    <?php echo $country->Name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>