<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "magasin";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}

// Récupérer l'ID de la personne (clé étrangère) depuis la session
session_start();
$id_personne = $_SESSION['utilisateur_id']; // Assurez-vous d'avoir démarré une session

// Récupérer les données du formulaire
$articleNames = $_POST['articleName'];
$quantities = $_POST['quantity'];

// Insérer les données dans la table article_demande
$stmt = $conn->prepare("INSERT INTO article_demander (   nom,id_personne,quantite_demander,id_article) VALUES (?, ?, ?, ?)");

try {
    $conn->beginTransaction();

    for ($i = 0; $i < count($articleNames); $i++) {
        $nom_article = $articleNames[$i];
        $quantite_demande = $quantities[$i];

        // Requête pour obtenir l'ID de l'article correspondant au nom de l'article
        $stmt_select = $conn->prepare("SELECT id_article FROM article WHERE nom = ?");
        $stmt_select->execute([$nom_article]);
        $row = $stmt_select->fetch(PDO::FETCH_ASSOC);
        $id_article = $row['id_article'];

        // Insérer les données dans la table article_demande
        $stmt->execute([$id_personne, $id_article, $quantite_demande, $nom_article]);
    }

    $conn->commit();
    echo 'success'; // Réponse au client

} catch(PDOException $e) {
    $conn->rollback();
    die("Une erreur est survenue lors de l'insertion des données : " . $e->getMessage());
}

$stmt->closeCursor();
$conn = null;

// Générer le PDF
require_once 'chemin_vers_dompdf/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

// Générer le contenu HTML du PDF
$html = '<h1>Articles demandés :</h1>';
$html .= '<ul>';
for ($i = 0; $i < count($articleNames); $i++) {
    $html .= '<li>' . $articleNames[$i] . ' - Quantité : ' . $quantities[$i] . '</li>';
}
$html .= '</ul>';

// Convertir en PDF
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->render();
$output = $dompdf->output();

// Enregistrer le PDF sur le serveur
$file = 'chemin_vers_le_dossier_pdf/article_demande.pdf';
file_put_contents($file, $output);
