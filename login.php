<?php
session_start();

// Vérifier si l'utilisateur est déjà connecté, le rediriger vers la page sécurisée si c'est le cas


// Vérifier si le formulaire de connexion a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $email = $_POST['Email'];
    $mot_de_passe = $_POST['password'];

    // Connexion à la base de données avec PDO
    $dsn = "mysql:host=localhost;dbname=magasin";
    $nom_utilisateur = "root";
    $mot_de_passe_bdd = "";
    
    try {
        $connexion = new PDO($dsn, $nom_utilisateur, $mot_de_passe_bdd);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête pour vérifier les informations de connexion et récupérer le nom de l'utilisateur
        $requete = "SELECT id_personne, nom FROM personne WHERE Email = :Email AND password = :password";
        $stmt = $connexion->prepare($requete);
        $stmt->bindParam(':Email', $email);
        $stmt->bindParam(':password', $mot_de_passe);
        $stmt->execute();

        if ($stmt->rowCount() === 1) {
            // Utilisateur trouvé, enregistrer l'ID de l'utilisateur dans la session
            $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['utilisateur_id'] = $utilisateur['id_personne'];
            $_SESSION['nom'] = $utilisateur['nom'];
            header("Location: principale.php");
            exit();
        } else {
            $passwordError = "Email ou Mot de passe incorrect. Veuillez réessayer.";
           
        }
    } catch (PDOException $e) {
        $erreur = "Erreur de connexion à la base de données : " . $e->getMessage();
    }




// Vérifier si l'utilisateur est déjà connecté, le rediriger vers la page sécurisée si c'est le cas

// Vérifier si le formulaire de connexion a été soumis


    // Vérifier les informations d'identification de l'administrateur
    if ($email === 'adminuser@gmail.com' && $mot_de_passe === 'password') {
        // Redirection vers la page d'administration
        header('Location: admin_page1.php');
        exit();
    } else {
        $erreur = "Email ou mot de passe incorrect";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous">
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <title>ensab store</title>
</head>
<style>
    
    
    .labe{
    width: 300px;
    height:30px;
  border-radius: 6px;
    margin-left: 250px;
    
    
}
.flex2{
    width: 50%;
    float:left;
}
.flex1{
    width: 50%;
    float:right;

}
.submit{
margin-left: 400px;
margin-top: 10px;

}
.label1{
    padding-top: 50px;
    height: 500px;  
    padding-top: 120px;
}
.height{
    padding-top: 50px;
    height: 500px;
 font-size:x-large;
 font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
 padding-top: 120px;
 color: black;
}
.button{
        margin-left: 900px;
        cursor: pointer;

    }
    body{
       background-color: #A5ABBD;
        height: 100vh;
        background-position: center;
        background-size: cover;
    }
    .back-icon {
            font-size: 24px;
            color: #000000;
            cursor: pointer;
        }
        .image{
            width: 220px;
            height: 80px;
        }
        .bonjour{
            margin-top: 50px;
            text-align: center;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .con{
            margin-right: 130px;
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
.error-message {
        color: red;
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
        <span class="fas fa-home"></span>  <li class="nav-item"><a href="login.php" class="nav-link">  Home</a></li>
            <li class="nav-item"><a href="inscription.php" class="nav-link">inscription </a></li>
            <li class="nav-item"><a href="#" class="nav-link"> <i class="fas fa-arrow-left back-icon" onclick="goBack()"></i></a></li>
           
        </ul>
        
    </div> 
   
 </div>
 <script>
        function goBack() {
            window.history.back();
        }
    </script>
 
<div>
    <p> <h1 class="bonjour">Bonjour et bienvenue !</h1></p>
</div>
 <div id="container">
 <!-- zone de connexion -->
 
 <form action="" method="POST">
    <div class="con"><h1 >Connexion</h1></div>
 
 
 <label><b>Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer Votre mail" name="Email" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="password" required>

 <input type="submit" id='submit' value='LOGIN' >
 <div>
 <span class="error-message"><?php echo isset($passwordError) ? $passwordError : ''; ?></span>
       
    </div>
 </form>
 </div>
    
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