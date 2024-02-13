<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "magasin";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $productId = $_POST["productId"];
    $quantity = $_POST["quantity"];

    // Vérifier si le produit existe dans la base de données
    $stmt = $conn->prepare("SELECT * FROM article WHERE id_article = :productId");
    $stmt->bindParam(":productId", $productId);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch();
        $currentQuantity = $row["quantite_stocke"];
        $newQuantity = $currentQuantity + $quantity;

        // Mettre à jour la quantité du produit
        $stmt = $conn->prepare("UPDATE article SET quantite_stocke = :newQuantity WHERE id_article = :productId");
        $stmt->bindParam(":newQuantity", $newQuantity);
        $stmt->bindParam(":productId", $productId);
        $stmt->execute();

        echo "Stock mis à jour pour le produit ID $productId. Nouvelle quantité : $newQuantity";
    } else {
        echo "Produit introuvable dans la base de données.";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$conn = null;
?>
