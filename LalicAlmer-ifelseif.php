<?php
$stock = 5;
$ordered = 3;

if ($stock > 0) {
    $message = 'In stock';
    $unit = 30;
} elseif ($ordered > 0) {
    $message = 'Coming soon';
} else {
    $message = 'Sold out';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1> The Holy Angel Store </h1>
        <h2> Chocolate </h2>
        <p><?= $message ?></p>
        <p><?= $unit ?></p>
        <h2> Trollis </h2>
        <p><?= $message ?></p>
        <p><?= $unit ?></p>
        <h2> Lolipop </h2>
        <p><?= $message ?></p>
        <p><?= $unit ?></p>
        <h2> Gummy Bears </h2>
        <p><?= $message ?></p>
        <p><?= $unit ?></p>
    </body>
    <footer> 
    <h2>Name: Lalic, Almer O.</h2>
    <h2>Date: 26/11/2025</h2>
    $copy; <?php echo date ('Y')?>
</footer>
</html>


