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
    <link rel="stylesheet" href="style_première_final_eval_cup.css">
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
        <img src="final eval cup week 1.jpg" alt="final eval cup week 1">
        <p2 class="team-ranking">
        1 : Sangild + KovaaksXD + QB - 276 points<br>
2 : Zarbeh + Asa + Hen - 274 points<br>
3 : KANTRI + F1n4ik + hizixx - 269 points<br>
4 : Hris + t3eny + Skvii - 260 points<br>
5 : Andyz + Axeforce + bevvys - 255 points<br>
6 : Nebs + Acorn + Kiro - 253 points<br>
7 : Deckzee + Art1st + Hijoe - 253 points<br>
8 : Pixx + Darm + demus - 249 points<br>
9 : Soree + ENCE t0zeotmr1x + Lequy - 249 points<br>
10 : SwizzY + Queasy + Merstach - 246 points<br>
11 : P1ng + Wox + Malibuca - 243 points<br>
12 : FiTo + King Cr1nge ψ + TwitterZynoxFNBR - 239 points<br>
13 : Auvahalo + Prism + Casperinovic - 234 points<br>
14 : Vagera + Turtl3 + Faded - 231 points<br>
15 : Kirwa + Kurama + Velo - 230 points<br>
16 : L0WK3Y + Mikkel + Liwshe - 230 points<br>
17 : Rabid + n0va + F4L3X 27 - 228 points<br>
18 : IDrop + Sky + Scroll - 225 points<br>
19 : Artskill + Floki + Clement - 223 points<br>
20 : SMR Mxxi + Abdelfnr + Crisbuca - 221 points<br>
21 : Gordete + Lenss + cool - 218 points<br>
22 : Efexy + Liam + Roz -.- - 217 points<br>
23 : pkr + mck + Maciak - 216 points<br>
24 : Vanyak3kk + Pixie + MariusCOW - 215 points<br>
25 : FataL freuzi 9 + AzatGo + R10 Arco281 - 212 points<br>
26 : Turtle + Kylie + Kaan - 211 points<br>
27 : Rax + Predage + Rad3on - 203 points<br>
28 : Vadeal + Cringe + Fnajen - 202 points<br>
29 : MrSavage + Upl + panzer - 201 points<br>
30 : Wheat + NeFrizi + S1neD - 201 points<br>
31 : wed1prime228qq + FataL SkyL1ght + Kulb - 199 points<br>
32 : vic0 + Veno + Flickzy - 198 points<br>
33 : Matrxǃ + BaselFire + Slay - 197 points
        </p2>
    </section>
</body>
</html>