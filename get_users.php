<?php
// Connexion à la base de données (vous devez modifier les informations de connexion selon votre configuration)
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'magasin';
$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);

// Requête pour récupérer les utilisateurs
$sql = 'SELECT * FROM personne';
$stmt = $conn->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Envoi des utilisateurs en tant que réponse JSON
header('Content-Type: application/json');
echo json_encode($users);
?>
