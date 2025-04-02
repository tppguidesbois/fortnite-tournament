<?php
session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=utilisateur", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    exit();
}

if (isset($_POST['connexion'])) {
    $pseudo = $_POST['pseudo'];
    $motdepasse = $_POST['mot_de_passe'];

    // Vérifier si l'utilisateur existe
    $requete = $bdd->prepare("SELECT * FROM users WHERE pseudo = :pseudo");
    $requete->execute(['pseudo' => $pseudo]);
    $user = $requete->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($motdepasse, $user['mot_de_passe'])) {
        // Connexion réussie
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['tentatives'] = 0; // Réinitialiser les tentatives
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['tentatives']++; // Incrémenter les tentatives
        $_SESSION['erreur_connexion'] = "Pseudo ou mot de passe incorrect.";
        header("Location: connexion.php");
        exit();
    }
}
?>
