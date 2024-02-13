

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
     crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  <title>Page d'inscription</title>
  <style>
    /* Ajoutez ici votre propre CSS personnalisé si nécessaire */
    
    body, html {
      height: 100%;
    }

    .center-container {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #A5ABBD; /* Couleur d'arrière-plan uniforme */
    }

    .form-container, .intro-container {
      padding: 20px;
      border-radius: 5px;
      background-color: white;
      margin: 0; /* Supprimer la marge pour coller les deux parties */
    }

    .small-input {
      width: 200px; /* Ajustez la taille en fonction de vos besoins */
      font-size: 14px; /* Ajustez la taille de la police en fonction de vos besoins */
    }
    .small-input1 {
      width: 200px; /* Ajustez la taille en fonction de vos besoins */
      font-size: 40px; /* Ajustez la taille de la police en fonction de vos besoins */
    }

    .small-text {
      font-size: 14px; /* Ajustez la taille de la police en fonction de vos besoins */
      font-weight: bold; /* Texte en gras */
    } .image{
              width: 220px;
              height: 80px;
    }
    .welcome-message {
      font-size: 50pxpx;
      font-weight: bold;
      color: #333;
      text-align: center;
      margin-top: 20px;

    }
    .center{
     margin-left: 190px;
    }
    .center1{
     margin-left: 190px;
     margin-top: 60px;
    }
    .bienvenue{
      height: 425px

    }
    .ceter{ text-align: center;
      margin-bottom: 50px;
    }
body{
  background-color: #D5CABD;
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
  </style>
</head>
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
      <div class="container ">
    <h2 class="welcome-message">Bienvenue sur notre site</h2>
  </div>
  <div class="center-container">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form-container">
            <h2 class="small-text1 ceter">Page d'inscription</h2>
            <form id="inscriptionForm" method="post" action="">

              <div class="row mb-3">
                <div class="col">
                  <label for="nom" class="form-label small-text">Nom</label>
                  <input type="text" class="form-control small-input" name="nom" id="nom" placeholder="Entrez votre nom">
                  <div id="nomError" class="text-danger"></div>
                </div>
                <div class="col">
                  <label for="prenom" class="form-label small-text">Prénom</label>
                  <input type="text" class="form-control small-input" name="prenom" id="prenom" placeholder="Entrez votre prénom">
                  <div id="prenomError" class="text-danger"></div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <label for="email" class="form-label small-text">Email</label>
                  <input type="email" class="form-control small-input" name="Email" id="Email" placeholder="Entrez votre email">
                  <div id="emailError" class="text-danger"></div>
                </div>
                <div class="col">
                  <label for="code" class="form-label small-text">Code</label>
                  <input type="number" class="form-control small-input" name ="code" id="code" placeholder="Entrez votre code">
                  <div id="codeError" class="text-danger"></div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <label for="password" class="form-label small-text">Mot de passe</label>
                  <input type="password" class="form-control small-input" name="password" id="password" placeholder="Entrez votre mot de passe">
                  <div id="passwordError" class="text-danger"></div>
                </div>
                <div class="col">
                  <label for="confirmation" class="form-label small-text">Confirmation</label>
                  <input type="password" class="form-control small-input" name="confirmation" id="confirmation" placeholder="Confirmez votre mot de passe">
                  <div id="confirmationError" class="text-danger"></div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary center"  value="inscrire" name="inscrire" id="inscrire" >S'inscrire</button>
            </form>
          </div>
        </div>
        <div class="col-md-6 marg">
          <div class="intro-container bienvenue">
            <h2 class="small-text1 ceter">Bienvenue sur notre site</h2>
            <p class="small-text">Bienvenue sur notre site de gestion des demandes d'articles pour les enseignants ! 
              Nous sommes ravis de vous accueillir dans notre plateforme en ligne qui vise à simplifier et à
               rationaliser le processus de demande et de gestion des fournitures scolaires.

Notre site web offre une solution pratique pour les enseignants qui ont besoin d'articles tels que des stylos, des papiers, des cahiers, et bien d'autres encore. Nous comprenons l'importance de disposer des fournitures
 nécessaires pour créer un environnement d'apprentissage optimal.</p>
 <form action="login.php">
            <button class="btn btn-primary center1" id="loginButton" value="inscrire" name="envoyer" id="inscrire">Se connecter</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
   integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
   crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('inscriptionForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Empêche la soumission du formulaire par défaut

      // Récupère les valeurs des champs
      var nom = document.getElementById('nom').value;
      var prenom = document.getElementById('prenom').value;
      var email = document.getElementById('Email').value;
      var code = document.getElementById('code').value;
      var password = document.getElementById('password').value;
      var confirmation = document.getElementById('confirmation').value;

      // Réinitialise les messages d'erreur
      document.getElementById('nomError').innerHTML = '';
      document.getElementById('prenomError').innerHTML = '';
      document.getElementById('emailError').innerHTML = '';
      document.getElementById('codeError').innerHTML = '';
      document.getElementById('passwordError').innerHTML = '';
      document.getElementById('confirmationError').innerHTML = '';

      // Vérifie si les champs sont vides et affiche les messages d'erreur correspondants
      if (nom === '') {
        document.getElementById('nomError').innerHTML = 'Veuillez entrer votre nom.';
      }
      if (prenom === '') {
        document.getElementById('prenomError').innerHTML = 'Veuillez entrer votre prénom.';
      }
      if (email === '') {
        document.getElementById('emailError').innerHTML = 'Veuillez entrer votre email.';
      }
      if (code === '') {
        document.getElementById('codeError').innerHTML = 'Veuillez entrer votre code.';
      }
      if (password === '') {
        document.getElementById('passwordError').innerHTML = 'Veuillez entrer votre mot de passe.';
      }
      if (confirmation === '') {
        document.getElementById('confirmationError').innerHTML = 'Veuillez confirmer votre mot de passe.';
      }
    });

   
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/dist/js/bootstrap-icons.min.js"></script>

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
   
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
