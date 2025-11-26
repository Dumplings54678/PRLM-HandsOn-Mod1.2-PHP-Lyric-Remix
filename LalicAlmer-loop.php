<?php
$packs = 5;
$price = 4.99;
?>
<h1> The Holy Angel Store </h1>
<head>
        <link rel="stylesheet" href="css/styles.css">
    </head>
<h2> Prices for Multiple Packs</h2>
<p>
    <?php
    do {
        echo $packs;
        echo ' = item cost $';
        echo $price * $packs;
        echo '<br>';
        $packs--;
    } while ($packs > 0);
    ?>
    </p>
<footer> 
    <h2>Name: Lalic, Almer O.</h2>
    <h2>Date: 26/11/2025</h2>
    $copy; <?php echo date ('Y')?>
</footer>