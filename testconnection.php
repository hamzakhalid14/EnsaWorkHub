<?php


/*   
session_start();

if (isset($_POST["submit"])){
    
    $email = $_POST["Email"];
    $password = $_POST["password"];

require_once 'connectiondb.php';

$sql = "SELECT * FROM `personne` where Email = '$email' ;";
 $sth = $cnx->query($sql);
$result = $sth->fetchall();
if(!empty($result)){ foreach($result as $row){
            if($email == $row["Email"] && $password == $row["password"]){
            $log = "SELECT id_personne, Email FROM `personne` where Email = '$email'";
            $exec = $cnx->query($log);
            $id = $exec->fetch();
            $_SESSION["id_personne"] = $id["id_personne"];
            $_SESSION["Email"] = $id["Email"];
            $code = $id["id_personne"];
            if(!empty($email) and !empty($password)){
                $sqlLogin = "INSERT INTO `count_login` (`EmailLogin`, `PsswdLogin`) VALUES ('$email','$password');";
                $sthlogin = $cnx->query($sqlLogin);
                if($sthlogin)
                {  
                   echo '<script>alert("WELCOME monsieur ");</script>';
                   header("location:choix_article.php");
                }
                 else { echo "failed to insert "; exit();}
            
        }
        }}

    }
    
   

     }



  */
  
// Récupérer les informations du formulaire de login
$login = $_POST['Email'];
$password = $_POST['password'];

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "magasin";

$conn = new mysqli($servername, $username, $password_db, $dbname);

// Vérifier s'il y a une erreur de connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Vérifier si le compte existe dans la base de données
$sql = "SELECT * FROM personne WHERE Email = '$login' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Compte trouvé, redirection vers la page de bienvenue

    header("Location: choix.php");
} else {
  // Les informations de connexion sont incorrectes, afficher un message d'erreur
  $error_message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  // Rediriger vers la page de connexion avec le message d'erreur dans l'URL
  header("Location: acueil.php?error=" . urlencode($error_message));
  exit();
}



// Fermer la connexion à la base de données





// Vérifier les informations d'identification ici (par exemple, en les comparant à une base de données)
$username = "adminuser@gmail.com";
$password = "admin123@4";

//$email  = $_POST['Email'];
//$Password = $_POST['password'];

if ($Email == $username && $password == $password) {
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("Location: admin_page1.php"); // Redirige vers la page réservée aux administrateurs
    exit;
} 


?>
