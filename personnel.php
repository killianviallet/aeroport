<?php
include_once 'BDD.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste du personnel</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f7fa;
    margin: 0;
    padding: 0;
}

header {
    background-color: #003366;
    color: white;
    padding: 20px 0;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 10px 0 0 0;
    display: flex;
    justify-content: center;
    gap: 20px;
}

nav a {
    color: white;
    text-decoration: none;
    font-weight: bold;
}

nav a:hover {
    text-decoration: underline;
}

main {
    padding: 40px;
    text-align: center;
}
    table{
        width:100%;
        border-collapse:collaspe;
        table-layout:fixed;
    }
    th,td{
        word-wrap:break_word;
        white-space:normal;
        padding 8 px;
        border : 1px solid #ccc;
        overflow-wrap : break-word;
    }
    th{
        font-weight:bold;
        white-space:normal;
        background-color: #003366;
        color: white;
        text-align: center;

    }
    th,td{
        font-size:13px;
    }
    .retour {
    display: inline-block;
    padding: 10px 15px;
    background-color: skyblue ;
    color: black;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.retour:hover {
    background-color:skyblue ;
}
</style>
</head>
<body>
    <header>
    <a href="javascript:history.back()" class="retour">Retour</a>    

    <h1>Personnel</h1>
        <nav>
            <ul>
                <li><a href="aeroport.html">Accueil</a></li>
                <li><a href="compagnie_aerienne.php">Compagnies</a></li>
                <li><a href="vol.php">Vols</a></li>
                <li><a href="passager.php">Passagers</a></li>
                <li><a href="avion.php">Avions</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <table>
            <head>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>mail</th>
                    <th>date_de_naissance</th>
                </tr>
            </head>
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
            <body>
                <?php foreach ($personnel as $employe): ?>
                <tr>
                    <td><?= htmlspecialchars($employe['id_personnel']) ?></td>
                    <td><?= htmlspecialchars($employe['nom']) ?></td>
                    <td><?= htmlspecialchars($employe['prenom']) ?></td>
                    <td><?= htmlspecialchars($employe['tel']) ?></td>
                    <td><?= htmlspecialchars($employe['mail']) ?></td>
                    <td><?= htmlspecialchars($employe['date_naissance']) ?></td>
                </tr>
                <?php endforeach; ?>
            </body>
        </table>
    </main>
</body>
</html>