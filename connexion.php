<?php
// Sécurité de session
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.use_only_cookies', 1);
session_start();

// Protection contre le bruteforce
if (!isset($_SESSION['tentatives'])) {
    $_SESSION['tentatives'] = 0;
}
if ($_SESSION['tentatives'] >= 5) {
    die("Trop de tentatives échouées. Réessayez plus tard.");
}

// Générer un token CSRF (protection contre attaques CSRF)
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style_connexion.css">
</head>
<body>
    <form method="POST" action="login.php">
        <label for="pseudo">Pseudo :</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo" required>
        <br />
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Entrez votre mot de passe" required>
        <br />
        <!-- Protection CSRF -->
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <button type="submit" name="connexion">Se connecter</button>
    </form>

    <?php
    // Affichage des messages d'erreur
    if (isset($_SESSION['erreur_connexion'])) {
        echo '<p style="color: red;">' . htmlspecialchars($_SESSION['erreur_connexion']) . '</p>';
        unset($_SESSION['erreur_connexion']);
    }
    ?>
</body>
</html>
