<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Page d'accueil</title>
  <!-- Inclure les fichiers CSS de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="links4.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>


 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
  <style>
    /* Style personnalisé */
    .about-link {
      font-size: 18px;
      color: #333;
      text-decoration: none;
      transition: color 0.3s ease-in-out;
    }
    
    .about-link:hover {
      color: #007bff;
    }

    
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
.marg{
    margin-top: 80px;
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
}

.height{
   
    
 font-size:x-large;
 font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
 padding-top: 120px;
 color: black;
}
.footer-basic {
  padding:40px 0;
  background-color:#E2F1FF;
  color:#4b4c4d;
  margin-top: 300px;
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
    .text{
        text-align: center;
    }
    .button{
        margin-left: 900px;
        cursor: pointer;

    }
    body{
      background-color:  #A5ABBD;

    }
    .profil{
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
    }
    .image1{
width: 220px;
height: 80px;
    }
  </style>
</head>


    

   
<body>
<div class="navbar navbar-expand-md bg-dark navbar-dark text-danger">
    <img src="berrechid.png" alt="" class="image1">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu"> 
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainmenu">
        <ul class="navbar-nav button">
            <li class="nav-item"><a href="login.php" class="nav-link"> <span class="fas fa-home"></span>Home</a></li>
            <li class="nav-item"> <a href='login.php' class="nav-link">Déconnexion</a></li>
            <li class="nav-item"><a href="#" class="nav-link"> <i class="fas fa-arrow-left back-icon" onclick="goBack()"></i></a></li>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
        </ul>
        
    </div> 
 
 </div>
 <div class="text">
    <table>
      

        <tr> <h2 class="marg"><?php

 
  if($_SESSION['nom'] !== ""){
 $user =  $_SESSION['nom'] ;
 // afficher un message
 echo "<br>Bonjour $user, tu es connecté";
 }
 ?></h2><br> </tr>
    
    </div>
<div class="backd">
  <h3>Veillez choisir </h3>



</div>
<div class="centerr">
<p >
<a href="choix_article.php"> <button class="recruteur"> <h1> Demander des articles</h1></button> </a>    

</button>

</p>
<p >

<a href="envoyer_bon.php"> <button class="candidat"> <h1> Envoyer votre Bon de Sortie </h1></button> </a> 
</p>
</div>

    </table>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
   integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
   crossorigin="anonymous"></script>

  <!-- Inclure les fichiers JavaScript de Bootstrap -->
  
 


 


 
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