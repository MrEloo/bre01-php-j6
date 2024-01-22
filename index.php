<?php
session_start();

@$username = $_POST["username"];
@$motDePasse =  password_hash($_POST["mdp"], PASSWORD_DEFAULT);
@$valider =  $_POST["valider"];
$erreur = '';



if (isset($valider)) {
    if ($username == 'admin' && password_verify('admin', $motDePasse)) {
        $_SESSION['autoriser'] = "oui";
        header('Location: http://localhost/Exo_Sessions/bre01-php-j6/secret.php');
    } else {
        $erreur = 'Login ou mot de passe incorrect';
    }
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
</head>

<body>


    <form action="" method="POST" name="form_<?php echo uniqid(); ?> autocomplete=" off">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo $username ?>">
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" value="" autocomplete="new-password">
        <button type="submit" name="valider">Se connecter</button>
    </form>
    <?php if (!empty($erreur)) : ?>
        <div>
            <?= $erreur ?>
        </div>
    <?php endif ?>
</body>

</html>