<?php
include 'connection.php';

$requete = "SELECT * FROM personnel";
$resultat = $pdo->query($requete);



if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];
    $date_naiss = $_POST['date_naiss'];

    $requete_insert = "INSERT INTO personnel (nom, prenom, tel, mail, date_naiss) 
    VALUES (:nom, :prenom, :tel, :mail, :date_naiss)";
    $stmt = $pdo->prepare($requete_insert);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':date_naiss', $date_naiss);
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion des ressources</title>
    <link rel="stylesheet" href="aeroport.css">
</head>
<body>
<h1>personnel</h1>

    <table>
        <tr>
            <th>ID personnel</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>téléphone</th>
            <th>Mail</th>
            <th>Date de naissance</th>
        </tr>



<h2>Ajouter une nouvelle personne</h2>
<form method="POST" action="">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom">

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom">

    <label for="tel">téléphone :</label>
    <input type="text" id="tel" name="tel"><br><br>

    <label for="mail">Mail :</label>
    <input type="email" id="mail" name="mail">

    <label for="date_naiss">Date de naissance :</label>
    <input type="text" id="date_naiss" name="date_naiss"><br><br>

    <button type="submit" name="submit">Ajouter</button><br><br>
</form>


        <?php
        while ($ligne = $resultat->fetch()) {
            echo "<tr>";
            echo "<td>" . $ligne['id_personnel'] . "</td>";
            echo "<td>" . $ligne['nom'] . "</td>";
            echo "<td>" . $ligne['prenom'] . "</td>";
            echo "<td>" . $ligne['tel'] . "</td>";
            echo "<td>" . $ligne['mail'] . "</td>";
            echo "<td>" . $ligne['date_naiss'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
