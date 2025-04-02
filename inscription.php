<?php
session_start();
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fortnite tournament</title>
    <link rel="stylesheet" href="style_inscription.css">
</head>
<body>
    <form method="POST" action="traitement.php">
        <label for="nom">votre nom</label>
        <input type="text" id="nom" name="nom" placeholder="entrez votre nom" required>
        <br />
        <label for="prenom">votre prenom</label>
        <input type="text" id="prenom" name="prenom" placeholder="entrez votre prenom" required>
        <br />
        <label for="pseudo">votre pseudo</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="entrez votre pseudo" required>
        <br />
        <label for="email">votre email</label>
        <input type="email" id="email" name="email" placeholder="entrez votre email" required>
        <br />
        <label for="mot de passe">votre mot de passe</label>
        <input type="mot de passe" id="mot_de_passe" name="mot_de_passe" placeholder="entrez votre mot de passe" required>
        <br />
        <button type="submit" name="ok">S'inscrire</button>
        <?php
        if (isset($_SESSION['erreur_inscription'])) {
            echo '<p style="color: red;">' . $_SESSION['erreur_inscription'] . '</p>';
            unset($_SESSION['erreur_inscription']); // Supprime le message après affichage
        }
        ?>
    </form>
</body>
</html>