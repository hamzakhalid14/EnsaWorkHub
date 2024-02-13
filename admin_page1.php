
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
l
     rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Page réservée aux administrateurs</title>
</head>
<style>
    body{
        background-color: #A5ABBD;
        height: 100vh;
        background-position: center;
        background-size: cover;
    }
   
    /* Styles CSS pour le tableau de bord */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      
    }
    
    h1 {
      text-align: center;
    }
    
    .dashboard-container1 {
      float: left;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 300px;
      margin-right: 500px;
      margin-left: 200px ;
    }
    .dashboard-container2 {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 300px;
      margin-left: 170px;
    }
    
    .dashboard-card1 {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      margin: 0 10px;
      text-align: center;
      border-color: black;
    }
    .dashboard-card2 {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding-top: 30px;
      padding-bottom: 10px;
      margin: 0 10px;
      text-align: center;
      border-color: black;
     width: 280px;
     height: 170px;
     
    }
    .button{
        margin-left: 900px;
        cursor: pointer;

    }
    
    .transparent-button {
            background: transparent;
            border: none;
            color: black;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .lien{
          color: black;
          text-decoration: none;
        }
        .stock{
          margin-left: 200px ;

        }
        .stock2{
          margin-left: 80px ;

        }
        .cls{
          float: left;
        }
  
  
  .image{
 width: 220px;
 height: 70px;
  }

    .footer-basic {
  padding:40px 0;
  background-color:#E2F1FF;
  color:#4b4c4d;
  margin-top: 30px;
}

.footer-basic ul {
  padding:0;
  list-style:none;
  text-align:center;
  font-size:18px;
  line-height:1.6;
  margin-bottom:0;
}

.footer-basic li {
  padding:0 10px;
}

.footer-basic ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-basic ul a:hover {
  opacity:1;
}

.footer-basic .social {
  text-align:center;
  padding-bottom:25px;
}

.footer-basic .social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}

.footer-basic .copyright {
  margin-top:15px;
  text-align:center;
  font-size:13px;
  color:#aaa;
  margin-bottom:0;
}

.container {
      text-align: center;
      margin-top: 100px;
      
   
    }

    .dashboard-card {
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      border: 2px solid #ddd;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      height: 150px;
  
    width: 100%;
    }

    .dashboard-card h4 {
      margin-bottom: 10px;
    }

    .dashboard-card p {
      font-size: 18px;
    }

    .dashboard-card a {
      color: #007bff;
      text-decoration: none;
    }

    .dashboard-card a:hover {
      text-decoration: underline;
    }

    .dashboard-card i {
      font-size: 40px;
      margin-bottom: 10px;
    }

    .user-card {
      border-color: #6c757d;
      background-color:#6c757d ;
    }

    .requests-card {
      border-color: #17a2b8;
      background-color: #17a2b8;
    }

    .stock-card {
      border-color: #28a745;
      background-color: #28a745;
    }

    .guide-card {
      border-color: #00C9A7;
      background-color: #00C9A7;
      padding-top: s;
    }
    .lien{
      color: #522630;

    }
    .board{
 
    
  }
</style>
<body>
<div class="navbar navbar-expand-md bg-dark navbar-dark text-danger">
        <img src="berrechid.png" alt="" class="image">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu"> 
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav button">
              <table>
              <tr> <td>  <li class="nav-item"><a href="acueil.php" class="nav-link"> Home</a></li></td>
              <td>  <li class="nav-item"><a href="logout.php" class="nav-link">déconnexion </a></li></td>
              <td>  <li class="nav-item"><a href="#" class="nav-link"> <i class="fas fa-arrow-left back-icon" onclick="goBack()"></i></a></li></td>
                </tr>
              </table>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
            </ul>  
        </div> 
     </div>
     <div class="container">
    <div class="dashboard-card">
      <h3>Tableau de bord</h3>
      <p>Vous êtes connecté en tant qu'administrateur.</p>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="dashboard-card user-card">
          <i class="bi bi-people"></i>
          <h4>Nombre d'utilisateurs</h4>
          <h1> <?php
      // Connexion à la base de données
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "magasin";

      $conn = new mysqli($servername, $username, $password, $dbname);

      // Vérifier la connexion
      if ($conn->connect_error) {
          die("Échec de la connexion à la base de données : " . $conn->connect_error);
      }

      // Requête pour compter le nombre d'utilisateurs
      $sql = "SELECT COUNT(*) AS total FROM personne";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      $userCount = $row['total'];

      // Afficher le nombre d'utilisateurs
      echo "<p>" . $userCount . "</p>";

      // Fermer la connexion à la base de données
      $conn->close();
      ?>
    </h1>
    <a href="users.php" class="lien">afficher utilisateur</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="dashboard-card requests-card">
          <i class="bi bi-envelope"></i>
          <h4>Demandes reçues</h4>
          <a href="affich_demandes.php" class="col lien"> afficher tout les bons reçus</a>
      <?php
      // Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "magasin";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Requête pour récupérer la dernière demande
$sql = "SELECT * FROM demande ORDER BY date_demande DESC LIMIT 1";
$result = $conn->query($sql);

// Afficher la demande
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Vous avez une demande" . "<br>";
    echo "<p><strong>" . $row["id_personne"] . "</strong> - " . $row["date_demande"] . "</p>";
} else {
    echo "<p>Aucune demande reçue pour le moment.</p>";
}

// Fermer la connexion à la base de données
$conn->close();

      ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="dashboard-card stock-card">
          <i class="bi bi-box"></i>
          <h4>Gérer le stock</h4>
          <p><a href="gerer_stock.php">Accéder</a></p>
        </div>
      </div>
    </div>

    <div class="dashboard-card guide-card">
      <i class="bi bi-book"></i>
      <h4>Guide du magasin</h4>
      <p><a href="guide_magasin.php">Accéder</a></p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/dist/js/bootstrap-icons.min.js"></script>

  <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright"> © 2023 Copyright:<a class="text-bleu" href="https://www.ensab.ac.ma//">Ensab.ma</a></p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>