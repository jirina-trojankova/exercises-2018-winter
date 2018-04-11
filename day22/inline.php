<?php
    require_once 'var_show.php';

    // is the current user administrator?
    $user_is_admin = false;

    $cars_i_want = [
        0 => 'Aston Martin',
        'Bugatti',
        'Ferrari',
        'Lamborghini',
        'Maserati',
        'Mercedes',
        'Porsche',
        'Skoda'
    ];

    $car_images = [
        0 => 'http://cdn.astonmartin.com/images/cars/vanquish-coupe.jpg',
        'https://i.ytimg.com/vi/PkkV1vLHUvQ/mqdefault.jpg',
        'https://buyersguide.caranddriver.com/media/assets/submodel/8119.jpg',
        'https://www.lamborghini.com/sites/it-en/files/DAM/it/models_gateway/blocks/special.png',
        'https://media.ed.edmunds-media.com/maserati/granturismo-convertible/2017/oem/2017_maserati_granturismo-convertible_convertible_mc_fq_oem_3_1280.jpg',
        'https://m.mercedes-benz.cz/content/media_library/hq/hq_mpc_reference_site/passenger_cars_ng/mobile/mbp/new_cars/models/a-class/w176/05-2015/mercedes-benz-a-class-w176_modeloverview_814x383_05-2015_jpg.object-Single-MEDIA.tmp/mercedes-benz-a-class_w176_modeloverview_814x383_05-2015.jpg',
        'https://www.autocar.co.uk/sites/autocar.co.uk/files/styles/gallery_slide/public/porsche-gt3-rs-rt-026.jpg?itok=8qrNkU5s',
        'http://autobible.euro.cz/wp-content/uploads/2017/07/%C5%A0koda-742-a-696x392.jpg'  
    ];

    // var_show($cars_i_want);

    // var_show($car_images);

    // var_show(array_combine($cars_i_want, $car_images));

    // die();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
.car {
    display: flex;
    align-items: flex-start;
    margin-bottom: 0.5em;
    padding: 0.5em;
    background-color: #e7e7e7;
    border-radius: 0.125em;
}
.car.odd {
    background-color: #d7d7d7;
}
.car img {
    max-width: 100px;
    margin-right: 1em;
}
    </style>
</head>
<body>
    


<ul class="menu">
    <li><a href="#">Home</a></li>
    <li><a href="#">Eshop</a></li>
    <li><a href="#">Contact</a></li>

    <?php if($user_is_admin) : ?>

        <li><a href="#">Link just for administrators</a></li>
        <li><a href="#">Another link just for administrators</a></li>
        
    <?php endif; ?>

</ul>

<?php foreach($cars_i_want as $i => $car_name) : ?>

    <div class="car <?= $i % 2 ? 'even' : 'odd' ?>">
        <img src="<?php echo $car_images[$i]; ?>" alt="">
        <div class="name"><?php echo $car_name; ?></div>
    </div>

<?php endforeach; ?>

</body>
</html>