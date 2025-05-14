<?php
include_once 'BDD.php';
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=style.css>
    <title>Login</title>
    <header>
        <h1>Gestion Aéroportuaire</h1>
        
    </header>
</head>
<body>
    <div class="login">
        <h1>Se connecter</h1>
        <form method="POST" action="">
            <label for="identifiant">Identifiant:</label><br>
            <input type="text" id="identifiant" name="identifiant"><br>

            <label for="mdp">Mot de passe:</label><br>
            <input type="text" id="mdp" name="mdp"><br>

            <button type="submit" name="connection">Se connecter</button>
        </form>
    </div>

<?php
$mot_de_passe = "";
$hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);
echo $hash;
$mot_de_passe_saisi = "";
$hash_enregistre = '';

if (password_verify($mot_de_passe_saisi, $hash_enregistre)) {
    echo "Le mot de passe est correct!";
} else {
    echo "L'identifiant ou le mot de passe est incorrect!";
}
?>
</body>
</html>

