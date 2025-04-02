<?php
session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "";

function securiserInput($data) {
    $data = trim($data); // Supprime les espaces inutiles
    $data = stripslashes($data); // Supprime les antislashes
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8'); // Empêche XSS
    return $data;
}


try {
    $bdd = new PDO("mysql:host=$servername;dbname=utilisateur;charset=utf8", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false  // Désactive l'émulation des requêtes préparées pour éviter l'injection SQL
    ]);
} catch (PDOException $e) {
    die("Erreur : Connexion échouée !");
}


if (isset($_POST['ok'])) {
    $nom = securiserInput($_POST['nom']);
    $prenom = securiserInput($_POST['prenom']);
    $pseudo = securiserInput($_POST['pseudo']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? $_POST['email'] : null;
    $motdepasse = $_POST['mot_de_passe'];
}


    // Sécurisation du mot de passe
    $motdepasseHash = password_hash($motdepasse, PASSWORD_BCRYPT);

    // Vérifier si le pseudo et l email existe déjà
    $verifUser = $bdd->prepare("SELECT pseudo, email FROM users WHERE pseudo = :pseudo OR email = :email");
    $verifUser->execute(["pseudo" => $pseudo, "email" => $email]);
    $userExists = $verifUser->fetch();
    
    if ($userExists) {
        if ($userExists['pseudo'] === $pseudo) {
            $_SESSION['erreur_inscription'] = "Ce pseudo est déjà utilisé.";
        }
        if ($userExists['email'] === $email) {
            $_SESSION['erreur_inscription'] = "Cet email est déjà utilisé.";
        }
        header("Location: inscription.php");
        exit();
    }
    

    // Insérer l'utilisateur si tout est OK
    $requete = $bdd->prepare("INSERT INTO users (pseudo, nom, prenom, mot_de_passe, email) VALUES (:pseudo, :nom, :prenom, :motdepasse, :email)");
    $requete->execute([
        "pseudo" => $pseudo,
        "nom" => $nom,
        "prenom" => $prenom,
        "motdepasse" => $motdepasseHash,
        "email" => $email
    ]);

    $_SESSION['pseudo'] = $pseudo;

    // Rediriger vers l'accueil
    header("Location: index.php");
    exit();
?>