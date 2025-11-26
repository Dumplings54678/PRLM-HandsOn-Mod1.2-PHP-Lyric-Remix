<?php
$day = 'Monday';
$days = 'Tuesday';
$wed = 'Wednesday';


$offer = match($day) {
    'Monday' => '20% off each 10 candy!',
    'Tuesday', 'Wednesday' => '20% off mints',
    default => '10% off your entire order', 
};

$offers = match($days) {
    'Monday' => '15% off each 10 candy!',
    'Tuesday', 'Wednesday' => '15% each 10 candy!',
    default => '10% off your entire order', 
};

$offe = match($wed) {
    'Monday' => '20% off chocolates',
    'Wednesday' => 'No Special Offers Today!',
    default => '10% off your entire order', 
};

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1> The Holy Angel Store </h1>
        <h2> Offers on <?= $day ?></h2>
        <p><?= $offer ?></p>
        <h2> Offers on <?= $days ?></h2>
        <p><?= $offers ?></p>
        <h2> Offers on <?= $wed ?></h2>
        <p><?= $offe ?></p>
    </body>
    <footer> 
    <h2>Name: Lalic, Almer O.</h2>
    <h2>Date: 26/11/2025</h2>
    $copy; <?php echo date ('Y')?>
</footer>
</html>