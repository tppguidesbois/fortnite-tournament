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

// Récupérer les informations actuelles de l'utilisateur
$pseudo = $_SESSION['pseudo'];
$requete = $bdd->prepare("SELECT * FROM users WHERE pseudo = :pseudo");
$requete->execute(["pseudo" => $pseudo]);
$user = $requete->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil</title>
    <link rel="stylesheet" href="style_profil.css">
</head>
<body>

<body>
    <section>
        <nav>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="cup.php">Cup</a></li>
    
            <?php if (isset($_SESSION['pseudo'])): ?>
                <li><a href="profil.php"><?php echo htmlspecialchars($_SESSION['pseudo']); ?></a></li>
                <li><a href="logout.php">Déconnexion</a></li>
            <?php else: ?>
                <li><a href="inscription.php">Inscription</a></li>
                <li><a href="connexion.php">Connexion</a></li>
            <?php endif; ?>
        </nav>
</body>
    <h2>Modifier mes informations</h2>

    <?php
    // Affichage d'un message si une modification a échoué ou réussi
    if (isset($_SESSION['message_profil'])) {
        echo '<p style="color: red;">' . $_SESSION['message_profil'] . '</p>';
        unset($_SESSION['message_profil']);
    }
    ?>

    <form method="POST" action="modifier_profil.php">
        <label for="pseudo">Pseudo :</label>
        <input type="text" id="pseudo" name="pseudo" value="<?php echo htmlspecialchars($user['pseudo']); ?>" required>
        <br>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($user['nom']); ?>" required>
        <br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo htmlspecialchars($user['prenom']); ?>" required>
        <br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        <br>

        <label for="nouveau_mdp">Nouveau mot de passe :</label>
        <input type="password" id="nouveau_mdp" name="nouveau_mdp">
        <br>

        <button type="submit" name="modifier">Modifier</button>
    </form>
</body>
</html>