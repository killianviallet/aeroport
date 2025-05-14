<?php
include_once 'BDD.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des vols</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
    <a href="javascript:history.back()" class="retour">Retour</a>    

        <h1>Vols</h1>
        <nav>
            <ul>
                <li><a href="aeroport.html">Accueil</a></li>
                <li><a href="compagnie_aerienne.php">Compagnies</a></li>
                <li><a href="passager.php">Passagers</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID_Vol</th>
                    <th>Date départ</th>
                    <th>Date arrivée</th>
                    <th>Heure départ</th>
                    <th>Heure arrivée</th>
                    <th>ID Avion</th>
                    <th>Status</th>
                    <th>Piste</th>
                    <th>Porte embarquement</th>
                    <th>Destination départ</th>
                    <th>Destination arrivée</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vol as $vol): ?>
                <tr>
                    <td><?= htmlspecialchars($vol['id_vol']) ?></td>
                    <td><?= htmlspecialchars($vol['date_depart']) ?></td>
                    <td><?= htmlspecialchars($vol['date_arrivee']) ?></td>
                    <td><?= htmlspecialchars($vol['heure_depart']) ?></td>
                    <td><?= htmlspecialchars($vol['heure_arrivee']) ?></td>
                    <td><?= htmlspecialchars($vol['id_avion']) ?></td>
                    <td><?= htmlspecialchars($vol['id_status']) ?></td>
                    <td><?= htmlspecialchars($vol['id_piste']) ?></td>
                    <td><?= htmlspecialchars($vol['id_porte_embarquement']) ?></td>
                    <td><?= htmlspecialchars($vol['id_destination_depart']) ?></td>
                    <td><?= htmlspecialchars($vol['id_destination_arrivee']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>
