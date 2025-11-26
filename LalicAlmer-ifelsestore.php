<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1> Greetings </h1>
<?php
$t = date("H");

if ($t < "10") {
  echo "Have a wonderful Morning Sir/Maam!";
} elseif ($t < "20") {
  echo "Have a Wonderful Morning Sir/Maam!";
} else {
  echo "Have a Wonderful Evening Sir/Maam!";
}
?>

</body>
</html>

<?php
$stock = 5;
$ordered = 3;

if ($stock > 0) {
    $message = 'In stock';
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
    </body>
    <footer> 
    <h2>Name: Lalic, Almer O.</h2>
    <h2>Date: 26/11/2025</h2>
    $copy; <?php echo date ('Y')?>
</footer>
</html>