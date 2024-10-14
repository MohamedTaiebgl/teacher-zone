
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


$fullname = htmlspecialchars($_POST['fullname']);
$phone = htmlspecialchars($_POST['phone']);
$parentPhone = htmlspecialchars($_POST['parentPhone']);
$localisation = htmlspecialchars($_POST['localisation']);
$grade = htmlspecialchars($_POST['grade']);
$specialty = isset($_POST['specialty']) ? htmlspecialchars($_POST['specialty']) : '';
$status = htmlspecialchars($_POST['status']);

if (empty($specialty) && in_array($grade, ["2eme", "3eme", "bac"])) {
    echo "Veuillez choisir une spécialité pour la classe $grade.";
} else {
    if(in_array($grade, ["2eme", "3eme", "bac"])){
    $sql = "INSERT INTO etudiants (fullname, phone, parentPhone, localisation, grade, specialty, status) 
            VALUES ('$fullname', '$phone', '$parentPhone', '$localisation', '$grade', '$specialty', '$status')";
    }
    else{
        $sql = "INSERT INTO etudiants (fullname, phone, parentPhone, localisation, grade, status) 
        VALUES ('$fullname', '$phone', '$parentPhone', '$localisation', '$grade', '$status')";
    }
    if ($conn->query($sql) === TRUE) {
        echo "Nouvel enregistrement créé avec succès";
        include "listeetudiants.php";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}


?>