
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"

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
      margin-right: 800px;
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
      padding: 20px;
      margin: 0 10px;
      text-align: center;
      border-color: black;
     width: 280px;
     height: 170px;
    }
   
  .col{
    margin-top: 80px;
    margin-left: 300px;
    color: #522630;
  }
  .button{
        margin-left: 900px;
        cursor: pointer;

    }
    .image{
      width: 220px;
      height: 70px;
    }
  .hbb{
    display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
  }
  table {
  border-collapse: collapse;
  width: 100%;
  background-color: white; /* Couleur d'arrière-plan */
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
.imgae{
width: 220px;
height: 80px;
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
<body>
<div class="navbar navbar-expand-md bg-dark navbar-dark text-danger">
    <img src="berrechid.png" alt="" class="image">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu"> 
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainmenu">
        <ul class="navbar-nav button">
            <li class="nav-item"><a href="acueil.php" class="nav-link "> Home</a></li>
            <li class="nav-item"><a href="inscription.php" class="nav-link">inscription </a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Déconnexion</a></li>
            <li class="nav-item"><a href="#" class="nav-link"> <i class="fas fa-arrow-left back-icon" onclick="goBack()"></i></a></li>
  /<ul>
  <script>
        function goBack() {
            window.history.back();
        }
    </script>
    </div> 
</div>
<h1>Liste des demandes  existants</h1>
<div class="hbb">

  <table>
    <thead>
      <tr>
        <th>Nom du fichier</th>
        <th> <p > Date d'envoi</p></th>
      </tr>
    </thead>
    <tbody>

      <?php include 'get_pdf_files.php'; ?>
    </tbody>
  </table>
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