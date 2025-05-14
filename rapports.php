<?php
include 'connection.php';

$requete = "SELECT * FROM avion";
$resultat = $pdo->query($requete);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rapport</title>
    <link rel="stylesheet" href="aeroport.css">
</head>
<body>
    <h1>Rapports des avions</h1>

    <table>
        <tr>
            <th>ID avion</th>
            <th>Carburant</th>
            <th>Modèle</th>
            <th>Ressource</th>
            <th>Marque</th>
            <th>Nombre de place</th>
        </tr>


        <?php
        while ($ligne = $resultat->fetch()) {
            echo "<tr>";
            echo "<td>" . $ligne['id_avion'] . "</td>";
            echo "<td>" . $ligne['carburant'] . "</td>";
            echo "<td>" . $ligne['modele'] . "</td>";
            echo "<td>" . $ligne['ressources'] . "</td>";
            echo "<td>" . $ligne['marques'] . "</td>";
            echo "<td>" . $ligne['nb_place'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
