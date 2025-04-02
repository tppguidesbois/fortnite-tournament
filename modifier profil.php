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

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['pseudo'])) {
    header("Location: index.php");
    exit();
}

// Récupérer l'ancien pseudo pour mettre à jour la base de données
$ancien_pseudo = $_SESSION['pseudo'];

// Récupérer les nouvelles données du formulaire
$pseudo = $_POST['pseudo'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$nouveau_mdp = $_POST['nouveau_mdp'];

// Vérifier si le pseudo est déjà utilisé par un autre utilisateur
$verifPseudo = $bdd->prepare("SELECT COUNT(*) FROM users WHERE pseudo = :pseudo AND pseudo != :ancien_pseudo");
$verifPseudo->execute(["pseudo" => $pseudo, "ancien_pseudo" => $ancien_pseudo]);
$pseudoExiste = $verifPseudo->fetchColumn();

if ($pseudoExiste > 0) {
    $_SESSION['message_profil'] = "Ce pseudo est déjà pris. Choisissez un autre.";
    header("Location: profil.php");
    exit();
}

// Préparer la requête de mise à jour
if (!empty($nouveau_mdp)) {
    // Sécuriser le mot de passe
    $motdepasseHash = password_hash($nouveau_mdp, PASSWORD_BCRYPT);
    $requete = $bdd->prepare("UPDATE users SET pseudo = :pseudo, nom = :nom, prenom = :prenom, email = :email, mot_de_passe = :motdepasse WHERE pseudo = :ancien_pseudo");
    $requete->execute([
        "pseudo" => $pseudo,
        "nom" => $nom,
        "prenom" => $prenom,
        "email" => $email,
        "motdepasse" => $motdepasseHash,
        "ancien_pseudo" => $ancien_pseudo
    ]);
} else {
    // Mise à jour sans changer le mot de passe
    $requete = $bdd->prepare("UPDATE users SET pseudo = :pseudo, nom = :nom, prenom = :prenom, email = :email WHERE pseudo = :ancien_pseudo");
    $requete->execute([
        "pseudo" => $pseudo,
        "nom" => $nom,
        "prenom" => $prenom,
        "email" => $email,
        "ancien_pseudo" => $ancien_pseudo
    ]);
}

// Mettre à jour la session avec le nouveau pseudo
$_SESSION['pseudo'] = $pseudo;
$_SESSION['message_profil'] = "✅ Informations mises à jour avec succès !";

// Rediriger vers `profil.php`
header("Location: profil.php");
exit();
?>
