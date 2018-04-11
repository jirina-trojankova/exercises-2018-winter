<?php


    // all the grandiose logic
    // without any output
    $all_ok = true;

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php if($all_ok) : ?>

        <h1>ALL went OK!</h1>

    <?php else : ?>

        <h1>There were problems :(</h1>
        
    <?php endif; ?>

</body>
</html>