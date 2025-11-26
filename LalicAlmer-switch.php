<?php
$day = 'Monday';
$days = 'Tuesday';
$wed = 'Wednesday';

switch ($day) {
    case 'Monday';
        $offer = '20% off each 10 candy!';
        break;
    case 'Tuesday';
        $offer = '15% each 10 candy!';
        break;
    default;
        $offer = 'Buy three packs, get one free';
}

switch ($days) {
    case 'Monday';
        $offer = '20% offeach 10 candy!';
        break;
    case 'Tuesday';
        $offers = '15% off each 10 candy!';
        break;
    default;
        $offer = 'Buy three packs, get one free';
}

switch ($wed) {
    case 'Monday';
        $offer = '20% off each 10 candy!';
        break;
    case 'Tuesday';
        $offers = '15% off each 10 candy!';
        break;
    case 'Wednesday';
        $offe = 'No Special Offers Today!';
        break;
    default;
        $offer = 'No Special Offers Today!';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <head>
        <h1> The Holy Angel Store </h1>
        <h2> Offers on <?= $day; ?></h2>
        <p><?= $offer ?></p>
        <h2> Offers on <?= $days; ?></h2>
        <p><?= $offers ?></p>
        <h2> Offers on <?= $wed; ?></h2>
        <p><?= $offe ?></p>
    </head>
    <footer> 
    <h2>Name: Lalic, Almer O.</h2>
    <h2>Date: 26/11/2025</h2>
    $copy; <?php echo date ('Y')?>
</footer>
</html>