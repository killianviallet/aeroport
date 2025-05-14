<?php
include_once 'BDD.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des passagers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
    <a href="javascript:history.back()" class="retour">Retour</a>

    <h1>Passagers</h1>
        <nav>
            <ul>
                <li><a href="aeroport.html">Accueil</a></li>
                <li><a href="compagnie_aerienne.php">Compagnies</a></li>
                <li><a href="vol.php">Vols</a></li>
            </ul>

        </nav>
    </header>
    <main>
    <form method="POST" action="">
   <input type=text id="billet" name= "billet">

   <button type="submit" name="rechercher">Rechercher</button>
   </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Vol</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($passager as $personne): ?>
                <tr>
                    <td><?= htmlspecialchars($personne['id_passager']) ?></td>
                    <td><?= htmlspecialchars($personne['nom']) ?></td>
                    <td><?= htmlspecialchars($personne['prenom']) ?></td>
                    <td><?= htmlspecialchars($personne['vol']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>