<?php
// Configurer la session AVANT de l'initialiser
ini_set('session.cookie_httponly', 1); // Empêche JavaScript d'accéder aux cookies (protection contre XSS)
ini_set('session.cookie_secure', 1);   // Active l'envoi des cookies uniquement en HTTPS (à activer en production)
ini_set('session.use_only_cookies', 1); // Interdit l'utilisation des sessions via URL (sécurité renforcée)

// Démarrer la session après avoir défini les options
session_start();
session_regenerate_id(true); // Change l'ID de session pour éviter les attaques de fixation de session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fortnite tournament</title>
    <link rel="stylesheet" href="style_index.css">
</head>
<body>
    <section>
        <nav>
            <ul class="li-haut-gauche">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="cup.php">Cup</a></li>
            </ul>
            <ul class="li-haut-droite">
                <?php if (isset($_SESSION['pseudo'])): ?>
                    <li><a href="profil.php"><?php echo htmlspecialchars($_SESSION['pseudo']); ?></a></li>
                    <li><a href="logout.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                </ul>
            <?php endif; ?>
        </nav>
    </section>
    <section>
        
    </section>
</body>
</html>
