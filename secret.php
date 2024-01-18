<?php
session_start();

if (!isset($_SESSION["autoriser"]) || $_SESSION["autoriser"] != 'oui') {
    header('Location: http://localhost/Exo_Sessions/bre01-php-j6/');
    exit();
}



?>


<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le code secret</title>
</head>

<body>

    <h1>Voici le code secret : PHP ROCKS </h1>

    <a href="deconnexion.php">se deconnecter</a>




</body>

</html>