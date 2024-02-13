<?php
// Vérification des identifiants de connexion
if (isset($_POST['Email']) && isset($_POST['password'])) {
    $login = $_POST['Email'];
    $password = $_POST['password'];

    // Requête pour récupérer l'utilisateur correspondant au login
    $query = "SELECT * FROM personne WHERE Email = :Email";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['Email' => $login]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérification du mot de passe
    if ($user && password_verify($password, $user['password'])) {
        // Authentification réussie
        session_start();
        $_SESSION['id_personne'] = $user['id'];
        $_SESSION['nom'] = $user['nom'];
        header("Location: choix.php"); // Rediriger vers la page d'accueil après connexion
        exit();
    } else {
        // Identifiants invalides
        $error = "Identifiants invalides";
    }
}
?>

<!-- Formulaire de connexion -->
<form method="POST" action="login.php">
    <input type="text" name="login" placeholder="Nom d'utilisateur" required><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br>
    <input type="submit" value="Connexion">
</form>

<!-- Affichage des erreurs -->
<?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
<?php endif; ?>
