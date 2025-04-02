<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fortnite tournament</title>
    <link rel="stylesheet" href="style_eval_cup.css">
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
        <p><a href="première_final_eval_cup.php">25/02/2025</a></p>
        <p><a href="deuxième_final_eval_cup.php">04/03/2025</a></p>
        <p><a href="troisième_final_eval_cup.php">11/03/2025</a></p>
        <p><a href="quatrième_final_eval_cup.php">18/03/2025</a></p>
        <p><a href="cinquième_final_eval_cup.php">25/03/2025</a></p>
        <p><a href="sixième_final_eval_cup.php">01/04/2025</a></p>
        <p><a href="septième_final_eval_cup.php">08/04/2025</a></p>
        <p><a href="huitième_final_eval_cup.php">15/04/2025</a></p>
        <p><a href="neuvième_final_eval_cup.php">22/04/2025</a></p>
    </section>
</body>
</html>