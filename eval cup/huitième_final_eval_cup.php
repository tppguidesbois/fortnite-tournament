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
    <link rel="stylesheet" href="style_huitième_final_eval_cup.css">
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
        <img src="final eval cup week 8.jpg" alt="final eval cup week 8">
        <p2 class="team-ranking">
        open qual :<br>
        1 : Chap + t3eny + Skvii - 324 points<br>
2 : Anas + S1neD + Refsgaard - 308 points<br>
3 : dinus + G13ras + FRANEK - 302 points<br>
4 : L0WK3Y + QB + Liwshe - 301 points<br>
5 : Vanyak3kk + Pixie + MariusCOW - 296 points<br>
6 : Pinq + Nebs + Kiro - 294 points<br>
7 : P1ng + Wox + Malibuca - 283 points<br>
8 : IDrop + Sky + Scroll - 282 points<br>
9 : Vexi + Pixovsky + FLWLSS KIZERS - 272 points<br>
10 : Kylie + Cheapz + 9UNA - 264 points<br>
11 : slavik + Kenty + Ve1ryy - 257 points<br>
12 : SwizzY + Queasy + Merstach - 256 points<br>
13 : Th0masHD + Upl + panzer - 253 points<br>
14 : Robin + Cheatiin + Trexer - 253 points<br>
15 : ghоst fv + Hyper + Firen - 249 points<br>
16 : Cringe + Volko + kiduoo - 248 points<br>
17 : Klown + 1Vanjkee + F1n4ik - 247 points<br>
18 : Setty + charyy + Kami - 246 points<br>
19 : urgens drukly + detect Quixǃ + Snowzy - 244 points<br>
20 : Polish + AV bpro madz1nnǃ + BPRO Robcio yhyh - 242 points<br>
21 : scout le loo AIM + ODIN + Karn - 240 points<br>
22 : Zarbeh + Misha + Yassen 1st - 239 points<br>
23 : Shxrk + TruleX + Noahreyli - 237 points<br>
24 : Ryuga + Jackenni + Bluqe - 234 points<br>
25 : tjinо + PabloWingu + Fredoxie - 234 points<br>
26 : Rax + Predage + Rad3on - 234 points<br>
27 : Prism + Kyry + Casperinovic - 233 points<br>
28 : Pixx + Darm + demus - 231 points<br>
29 : Fant + BS Hlechis xD + hizixx - 231 points<br>
30 : Spexx + Liam + Splasheax - 230 points<br>
31 : Voxe + Clement + Splik - 230 points<br>
32 : Dribbler Skjalm + LXN Lynx1zr + dżelifiszy - 229 points<br>
33 : Cabonja3aa + ZBIDAYYYYYYYYYYY + NeassGOTY 7 ǃ - 229 points
        </p2>
    </section>
</body>
</html>