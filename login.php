<?php
session_start();

if (isset($_POST['connection'])) {

    $mysqli = mysqli_connect("localhost", "root", "", "aeroport");


    $identifiant = mysqli_real_escape_string($mysqli, $_POST['identifiant']);
    $mdp = mysqli_real_escape_string($mysqli, $_POST['mdp']);

    $Requete = mysqli_query($mysqli, "SELECT * FROM personnel WHERE identifiant = '$identifiant' AND mdp = '$mdp'");

    hash("sha256",$mdp);
    
    if (mysqli_num_rows($Requete) == 0) {
        echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
    } else {
        $_SESSION['identifiant'] = $identifiant;
        header("Location: accueil.php");
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aeroport.css">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <h1>Se connecter</h1>
        <form method="POST" action="">
            <label for="identifiant">Identifiant:</label>
            <input type="text" id="identifiant" name="identifiant"><br>

            <label for="mdp">Mot de passe:</label>
            <input type="text" id="mdp" name="mdp"><br>

            <button type="submit" name="connection">Se connecter</button>
        </form>
    </div>
</body>
</html>
