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
$articleNames = $_POST['article_name'];
$quantities = $_POST['quantity'];

// Insérer les données dans la table article_demande
//$stmt = $conn->prepare("INSERT INTO article_demander (nom,id_personne,quantite_demander,id_article) VALUES (?, ?, ?, ?)");

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

        $stmt = $conn->prepare('INSERT INTO article_demander (nom, id_personne, quantite_demander, id_article) VALUES (:nom, :id_personne, :quantite, :id_article)');
        $stmt->bindParam(':nom', $nom_article);
        $stmt->bindParam(':id_personne', $id_personne);
        $stmt->bindParam(':quantite',  $quantite_demande );
        $stmt->bindParam(':id_article', $id_article);
        
        if ($stmt->execute()) {
        echo 'Article demandé avec succès.';
        } else {
        echo 'Erreur lors de la demande de l\'article.';
        }
    }

    $conn->commit();
    echo 'success'; // Réponse au client

} catch(PDOException $e) {
    $conn->rollback();
    die("Une erreur est survenue lors de l'insertion des données : " . $e->getMessage());
}

$stmt->closeCursor();
$conn = null;

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "magasin";

$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Assurez-vous d'avoir démarré la session


// Vérifier si l'utilisateur est connecté et récupérer son ID de personne à partir de la session
if (!isset($_SESSION['utilisateur_id'])) {
  header("Location: acueil.php");
  exit();
}

$idPersonne = $_SESSION['utilisateur_id']; // Supposons que vous stockez l'ID de personne dans la session

// Vérifier si le formulaire de demande a été soumis
if (isset($_POST['submit'])) {
    // Récupérer la date actuelle pour la demande
    $dateDemande = date('Y-m-d'); // Format : AAAA-MM-JJ

    // Insérer la demande dans la table "demande"
    $query = "INSERT INTO demande (id_personne, date_demande) VALUES (:id_personne, :date_demande)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id_personne", $idPersonne);
    $stmt->bindParam(":date_demande", $dateDemande);
    
    if ($stmt->execute()) {
      echo"la demande est stockeer`!";
     
    } else {
      echo"il y a un erreur!";
    }
    
    $stmt->closeCursor();
}

// Fermer la connexion à la base de données
$conn = null;


// include autoloader
use Dompdf\Dompdf;
require_once 'dompdf/autoload.inc.php';

//
//$options->set('chroot',realpath(''));
// reference the Dompdf namespace
$pdf = new Dompdf();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $articleNames = $_POST['article_name'];
    $quantities = $_POST['quantity'];
    $selectedDepartment = htmlspecialchars($_POST['department']);




$html = '<!DOCTYPE html>
<html>
<head>
  <title>Demande d\'articles - PDF</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    .image1{
      height: 30px;
      width: 60px;
      float:right;
      display: flex;

  }
  .image2{
    height: 30px;
    width: 60px;
    float:left;
    display: flex;

}
.signa{
 
  float:right;
  display: flex;
  margin-right: 100px;
  margin-top: 40px;

}
  .text{
    text-align: center;
     
}
.marg{
  margin-top: 40px;
  margin-buttom:40px;
}
  </style>
</head>
<body>
<div>

<h3 class="text"> Université hassan 1er </h3> 
<h3 class="text">Ecole Nationale des Sciences Appliquées de Berrechid </36>

</div>

  <h1 class="text" style ="margin-top:70px;">Demande d\'articles</h1>
  <div class="marg">
   <h3>service ou département :' . $selectedDepartment . '</h3>

  <h3>benificiaire :</h3>
  </div>
  <table style="margin-top: 40px;">
    <tr>
      <th>Nom de l\'article</th>
      <th>Quantité</th>
    </tr>';

  for ($i = 0; $i < count($articleNames); $i++) {
    $articleName = htmlspecialchars($articleNames[$i]);
    $quantity = htmlspecialchars($quantities[$i]);

    $html .= '<tr> 
      <td>' . $articleName . '</td>
      <td>' . $quantity . '</td>
    </tr>';
  }
 

  $html .= '</table>
  <h3 class ="signa">signature :</h3>
</body>

</html>';


$pdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$pdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$pdf->render();

// Output the generated PDF to Browser
$pdf->stream('demande_articles.pdf');
}
?>