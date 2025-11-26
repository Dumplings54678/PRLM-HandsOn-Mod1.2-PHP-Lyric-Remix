<?php
$unit = 30;

if ($unit > 0) {
    $message = 'Price Per Chocolate is 30$';
} else { 
    $message = 'Sold out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <head>
        <h1> The Holy Angel Store </h1>
        <h2> Chocolate </h2>
        <p><?= $message ?></p>
    </head>
    <footer> 
    <h2>Name: Lalic, Almer O.</h2>
    <h2>Date: 26/11/2025</h2>
    $copy; <?php echo date ('Y')?>
</footer>
</html>