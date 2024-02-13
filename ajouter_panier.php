<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "magasin";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
  die("La connexion a échoué : " . $conn->connect_error);
}

// Récupérer les données du formulaire
$article = $_POST['article-select'];
$quantite = $_POST['quantity-input'];

// Insérer les données dans la base de données
$sql = "INSERT INTO achats (article, quantite) VALUES ('$article', '$quantite')";

if ($conn->query($sql) === TRUE) {
  echo "Article ajouté au panier avec succès";
} else {
  echo "Erreur : " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>