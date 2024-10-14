
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bilel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$etudiant_id = htmlspecialchars($_POST['etudiant_id']);
$mois = htmlspecialchars($_POST['mois']);
$montant = htmlspecialchars($_POST['montant']);
$date_paiement = htmlspecialchars($_POST['date_paiement']);

$sql = "INSERT INTO paiements (etudiant_id, mois, montant, date_paiement)
VALUES ('$etudiant_id', '$mois', '$montant', '$date_paiement')";

if ($conn->query($sql) === TRUE) {
    echo "New payment recorded successfully";
    include "listeetudiants.php";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>