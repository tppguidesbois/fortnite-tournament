<?php
session_start();
// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['pseudo'])) {
    // Redirige vers la page de connexion
    header("Location: non_connecter_cup.php");
    exit(); // Arrête l'exécution du script après la redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fortnite tournament</title>
    <link rel="stylesheet" href="style_deuxième_final_eval_cup.css">
</head>
<body>
<section>
    <nav>
            <ul class="li-haut-gauche">
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../cup.php">Cup</a></li>
            </ul>
            <ul class="li-haut-droite">
                <?php if (isset($_SESSION['pseudo'])): ?>
                    <li><a href="../profil.php"><?php echo htmlspecialchars($_SESSION['pseudo']); ?></a></li>
                    <li><a href="../logout.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="../inscription.php">Inscription</a></li>
                    <li><a href="../connexion.php">Connexion</a></li>
                </ul>
            <?php endif; ?>
        </nav>
    </section>
    <section class="image-section">
        <img src="final eval cup week 2.jpg" alt="final eval cup week 2">
        <p2 class="team-ranking">
        open qual :<br>
        1 : Pixx + Darm + demus - 302 points<br>
2 : Srapt + Skrill + Hellfire - 286 points<br>
3 : BSK YZY + SLOXZAY 937x + Splik - 284 points<br>
4 : JannisZ + Noahreyli + rezon ay - 275 points<br>
5 : SkyJump + Kurama + Werex - 261 points<br>
6 : Vanyak3kk + Pixie + MariusCOW - 257 points<br>
7 : Robin + Cheatiin + Trexer - 248 points<br>
8 : FiTo + King Cr1nge ψ + TwitterZynoxFNBR - 248 points<br>
9 : Robban + Mappi + Shadox - 245 points<br>
10 : Lsodya Putrix52 + Peshka + FuryLegendary - 245 points<br>
11 : Setty + charyy + Kami - 241 points<br>
12 : Zarbeh + Asa + Hen - 238 points<br>
13 : L0WK3Y + Mikkel + Liwshe - 234 points<br>
14 : tjinо + QB + Fredoxie - 232 points<br>
15 : Snayzy + Voxe + Icee - 225 points<br>
16 : vic0 + Veno + Flickzy - 224 points<br>
17 : Cringe + Moneymaker + Fnajen - 224 points<br>
18 : Vagera + Jakebucà + Waizyache32 - 222 points<br>
19 : bs palochkaǃ + Kirb1 + wed1prime228qq - 222 points<br>
20 : Kikoo + one tralalero + Taze - 221 points<br>
21 : jaimеǃ + lenny sabr. + Snyps - 220 points<br>
22 : Twek + mydro5 + Juliusǃ - 219 points<br>
23 : Wheat + NeFrizi + 1Lusha - 217 points<br>
24 : Akiira + S1neD + Volko - 215 points<br>
25 : Fastroki + Focus + Upl - 213 points<br>
26 : KLAYZ K11 + Kifo + FRAC Rabbit VYX - 213 points<br>
27 : KramSu + Gordete + Clone - 212 points<br>
28 : Turtle + Kylie + Kaan - 211 points<br>
29 : Monto Gold7 + ODIN + FataL SkyL1ght - 211 points<br>
30 : Artskill + Floki + Clement - 209 points<br>
31 : stormySMZ + el1ke + 220W SaNyaGoD- - 208 points<br>
32 : Misha + t3eny + Skvii - 207 points<br>
33 : r4c aurayche32 + FataL freuzi 9 + AzatGo - 207 points
        </p2>
    </section>
</body>
</html>