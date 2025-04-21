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
    <link rel="stylesheet" href="style_sixième_final_eval_cup.css">
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
    <section class="image-section">
        <img src="final eval cup week 6.jpg" alt="final eval cup week 6">
        <p2 class="team-ranking">
        1 : Floki + Snayzy + Icee - 329 points<br>
2 : Vanyak3kk + Pixie + MariusCOW - 326 points<br>
3 : Akiira + Kurama + Werex - 306 points<br>
4 : Ankido + Kylie + Kaan - 283 points<br>
5 : Setty + charyy + Kami - 273 points<br>
6 : Drey + 1Vanjkee + Battercry - 272 points<br>
7 : Kombek + Blacha + Mikson - 270 points<br>
8 : Ricbor + Zara + Zangi - 269 points<br>
9 : Clement + KovaaksXD + Faded - 264 points<br>
10 : vic0 + Veno + Flickzy - 258 points<br>
11 : Mystic Przyzyk + killler darki 27 + bitwifvǃ - 253 points<br>
12 : Anas + S1neD + Refsgaard - 246 points<br>
13 : Srapt + Hellfire + trippernn - 246 points<br>
14 : Teqz + s2p bendyno + Fadedqt - 245 points<br>
15 : Doom + Kreg + ghоst fv - 245 points<br>
16 : L0WK3Y + QB + Liwshe - 240 points<br>
17 : Andilex + SkyJump + Momsy - 239 points<br>
18 : Rax + Predage + Rad3on - 239 points<br>
19 : Zahya 23 + Bimbo VIII + FLY DarkyGOTY - 237 points<br>
20 : IDrop + Sky + Scroll - 234 points<br>
21 : FiTo + King Cr1nge ψ + TwitterZynoxFNBR - 234 points<br>
22 : Twek + mydro5 + Astral Julius - 234 points<br>
23 : Triq + RiyoFnbr Lover + aight zane - 234 points<br>
24 : KANTRI + BS Hlechis xD + hizixx - 231 points<br>
25 : Maxiking + prax + AmoZz - 230 points<br>
26 : Wheat + NeFrizi + 1Lusha - 229 points<br>
27 : sbarı + Sxdia + Lacket - 229 points<br>
28 : Fastroki + Juu + JannisZ - 228 points<br>
29 : P1ng + Wox + Malibuca - 224 points<br>
30 : Lunex + onyx wint ʕᵒᴥᵒʔ + mvshter75 - 221 points<br>
31 : Cxshy + pkr + Seyyto - 220 points<br>
32 : Mattyzaix 667 + Squarti. + Crrlo - 220 points<br>
33 : 95V scoezz star + Yeray 311 + znn sk1lar 5 - 219 points
        </p2>
    </section>
</body>
</html>