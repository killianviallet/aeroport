<?php
include_once 'BDD.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des avions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <a href="javascript:history.back()" class="retour">Retour</a>

        <h1>Avions</h1>
        <nav>
            <ul>
                <li><a href="aeroport.html">Accueil</a></li>
                <li><a href="compagnie_aerienne.php">Compagnies</a></li>
                <li><a href="vol.php">Vols</a></li>
                <li><a href="passager.php">Passagers</a></li>
                <li><a href="personnel.php">Personnel</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <table>
            <head>
                <tr>
                    <th>ID_avion</th>
                    <th>Poids</th>
                    <th>Carburant</th>
                    <th>Modèle</th>
                    <th>Marques</th>
                    <th>Nb_places</th>
                </tr>
            </head>
            <tbody>
                <?php foreach ($avion as $avion): ?>
                <tr>
                    <td><?= htmlspecialchars($avion['id_avion']) ?></td>
                    <td><?= htmlspecialchars($avion['poids']) ?></td>
                    <td><?= htmlspecialchars($avion['carburant']) ?></td>
                    <td><?= htmlspecialchars($avion['modele']) ?></td>
                    <td><?= htmlspecialchars($avion['marques']) ?></td>
                    <td><?= htmlspecialchars($avion['nb_places']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>