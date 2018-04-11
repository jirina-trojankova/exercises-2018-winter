<?php

$vehicles = [
    'Bicycle' => 50,
    'Car' => 150,
    'Train' => 110
];

$messages = [
    'Preparing to do some stuff...',
    'Doing amazing stuff...',
    'Stuff is done.'
];

// $messages = [];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table border="1">
        <tr>
            <th>Means of transport</th>
            <th>Max. speed (km/h)</th>
        <tr>
        
        <?php foreach($vehicles as $vehicle => $top_speed) : ?>
        
            <tr>
                <td>
                    <?php echo $vehicle; ?>
                </td>
                <td>   
                    <?php echo $top_speed; ?>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>

    <?php if($messages) : ?>

        <h1>Messages:</h1>

        <ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">

            <?php foreach($messages as $message) : ?>

                <li>
                    <?php echo $message; ?>
                </li>

            <?php endforeach; ?>

        </ul>

    <?php endif; ?>
    
</body>
</html>