<?php
include 'connection.php';

$requete = "SELECT * FROM vol";
$resultat = $pdo->query($requete);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des vols</title>
    <link rel="stylesheet" href="aeroport.css">
</head>
<body>
<h1>liste des vols</h1>

    <table>
        <tr>
            <th>ID Vol</th>
            <th>Date Départ</th>
            <th>Date Arrivée</th>
            <th>Heure Départ</th>
            <th>Heure Arrivée</th>
        </tr>


        <?php
        while ($ligne = $resultat->fetch()) {
            echo "<tr>";
            echo "<td>" . $ligne['id_vol'] . "</td>";
            echo "<td>" . $ligne['date_depart'] . "</td>";
            echo "<td>" . $ligne['date_arrive'] . "</td>";
            echo "<td>" . $ligne['heure_depart'] . "</td>";
            echo "<td>" . $ligne['heure_arrive'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
