<?php
$host='localhost';
$user='root';
$password='';
$database='aeroport';
$connexion = mysqli_connect ('localhost','root','','aeroport');

/*table vols*/
$requete = $connexion->query("
    SELECT 
        v.id_vol,
        v.date_depart,
        v.date_arrivee,
        v.heure_depart,
        v.heure_arrivee,
        v.id_avion,
        s.libelle AS status,
        d1.depart AS destination_depart,
        d2.arrive AS destination_arrivee, 
        v.id_piste,
        v.id_porte_embarquement
    FROM vol v
    JOIN status s ON v.id_status = s.id_status
    JOIN destination_aeroport d1 ON v.id_destination_depart = d1.id_destination
    JOIN destination_aeroport d2 ON v.id_destination_arrivee = d2.id_destination
"); 
$requete = $connexion->query("SELECT * FROM vol");
$vol = [];
while ($row = $requete->fetch_assoc()) {
    $vol[] = $row;
}

/* table avions*/
$requete = $connexion->query("SELECT * FROM avion");
$avion = [];
while ($row = $requete->fetch_assoc()) {
    $avion[] = $row;
}

/* table compagnies _ aerienne */

$requete = $connexion->query("SELECT * FROM compagnie_aerienne");
$compagnie_aerienne = [];
while ($row = $requete->fetch_assoc()) {
    $compagnie_aerienne[] = $row;
}

/* table modifier compagnies*/

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $requete = $connexion->query("SELECT * FROM compagnies_aerienne WHERE id_compagnie=?");
    $compagnies = [];
    while ($row = $requete->fetch_assoc()) {
    $compagnies[] = $row;
    }
}
if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $stmt = $pdo->prepare("UPDATE compagnie_aerienne SET nom = ? WHERE id_compagnie = ?");
    $stmt->execute([$nom, $id]);
    header("Location: compagnies_aerienne.php");
    exit;
}

/*table passager*/
$requete = $connexion->query("SELECT * FROM passager");
$passager = [];
while ($row = $requete->fetch_assoc()) {
    $passager[] = $row;
}
/* table personnels*/
$requete = $connexion->query("SELECT * FROM personnel");
$personnel = [];
while ($row = $requete->fetch_assoc()) {
    $personnel[] = $row;
}


if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];
    $date_naiss = $_POST['date_naiss'];

    $requete_insert = "INSERT INTO personnel (nom, prenom, tel, mail, date_naiss) 
    VALUES (:nom, :prenom, :tel, :mail, :date_naiss)";
    $stmt = $mysqli_connect->prepare($requete_insert);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':date_naiss', $date_naiss);
    $stmt->execute();
}

if (isset($_POST['connection'])) {

    $mysqli = mysqli_connect("localhost", "root", "", "aeroport");


    $identifiant = mysqli_real_escape_string($mysqli, $_POST['identifiant']);
    $mdp = mysqli_real_escape_string($mysqli, $_POST['mdp']);

    $Requete = mysqli_query($mysqli, "SELECT * FROM personnel WHERE identifiant = '$identifiant' AND mdp = '$mdp'");

    if (mysqli_num_rows($Requete) == 0) {
        echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
    } else {
        $_SESSION['identifiant'] = $identifiant;
        header("Location: aeroport.html");
        exit();
    }
}

//rechercher le billet d'un passager à partir de son ID//

if (isset($_POST['rechercher'])) {
    $id_passager = mysqli_real_escape_string($mysqli, trim($_POST["id_passager"]));
    $requete = "SELECT id_billet FROM billet WHERE id_passager = '$id_passager'";
    echo "le billet du passager est :".$rechercher;
}
$sql = "INSERT INTO personnel (identifiant, mdp) VALUES (?, ?)";
$stmt =$connexion->prepare($sql);
$stmt->bind_param("ss", $nomUtilisateur, $motDePasseHache);

$nomUtilisateur = "votre_nom_utilisateur";
if ($stmt->execute()) {
    echo "Nouveau record créé avec succès";
} else {
    echo "Erreur: " . $sql . "<br>" . $connexion->error;
}

$stmt->close();
$connexion->close();

?>
