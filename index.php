<?php
session_start();

@$username = $_POST["username"];
@$motDePasse =  $_POST["mdp"];
@$valider =  $_POST["valider"];
$erreur = '';

if (isset($valider)) {
    if ($username == 'admin' && $motDePasse == 'admin') {
        $_SESSION['autoriser'] = "oui";
        header('Location: http://localhost/Exo_Sessions/bre01-php-j6/secret.php');
    } else {
        $erreur = 'Login ou mot de passe incorrect';
    }
}

var_dump($erreur);



var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
</head>

<body>


    <form action="" method="POST" autocomplete="off">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo $username ?>">
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" value="<?php echo $motDePasse ?>" autocomplete="new-password">
        <button type="submit" name="valider">Se connecter</button>
    </form>
    <?php if (!empty($erreur)) : ?>
        <div>
            <?= $erreur ?>
        </div>
    <?php endif ?>
</body>

</html>