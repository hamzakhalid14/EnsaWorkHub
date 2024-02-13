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