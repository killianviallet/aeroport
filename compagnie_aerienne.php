<?php
include_once 'BDD.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <title>Liste des compagnies</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <header>
   <a href="javascript:history.back()" class="retour">Retour</a>

       <h1>Compagnies Aériennes</h1>
       <nav>
           <ul>
               <li><a href="aeroport.html">Accueil</a></li>
               <li><a href="passager.php">Passagers</a></li>
               <li><a href="vol.php">Vols</a></li>

           </ul>
       </nav>
   </header>
   <main>
       <table>
           <head>
               <tr>
                   <th>ID</th>
                   <th>Nom</th>
               </tr>
           </head>
           <body>
               <?php foreach ($compagnie_aerienne as $compagnie): ?>
               <tr>
                   <td><?= htmlspecialchars($compagnie['id_compagnie']) ?></td>
                   <td><?= htmlspecialchars($compagnie['nom']) ?></td>
               </tr>
               <?php endforeach; ?>
           </body>
       </table>
   </main>
</body>
</html>