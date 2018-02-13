<?php

// require the database library
require_once 'database.php';

// connect to database world using functions from the library
$pdo = db_connect('world');

var_dump($pdo);

// 1. prepare a query
$my_sql_query = "
    SELECT *
    FROM `city`
    WHERE `CountryCode` = 'CZE'
";

$country_code = 'BFA';
$my_sql_query = "
    SELECT *
    FROM `city`
    WHERE `CountryCode` = ?
      AND `Population` > ?
";

// 2. prepare a statement and get it
$statement = $pdo->prepare($my_sql_query);

// 3. execute the statement
$statement->execute(['CZE', 1000000]);

$statement->setFetchMode(PDO::FETCH_ASSOC);

// 4. fetch all results
$results = $statement->fetchAll();

var_dump($results);
?>
<ul>
    <?php foreach($results as $result) : ?>
        <li>
            <?php echo $result['Name']; ?> 
            in the 
            <?php echo $result['District']; ?> 
            district has a population of 
            <?php echo $result['Population']; ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php

$query = "
    SELECT *
    FROM `country`
";
$results = db_query($query);

$query = "
    SELECT *
    FROM `country`
    WHERE `Continent` = ?
      AND `Population` > ?
";
$results = db_query($query, ['Europe', 20000000]);

var_dump($results);