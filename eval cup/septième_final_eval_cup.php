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
    <link rel="stylesheet" href="style_septième_final_eval_cup.css">
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
        <img src="final eval cup week 7.jpg" alt="final eval cup week 7">
        <p2 class="team-ranking">
        1 : Lsodya Putrix52 + wed1prime228qq + Kulb - 304 points<br>
2 : Czb + Eclipse + Nxthan - 298 points<br>
3 : Doom + ghоst fv + Ice - 277 points<br>
4 : tjinо + PabloWingu + Fredoxie - 276 points<br>
5 : Vadeal + MrSavage + rezon ay - 274 points<br>
6 : Ankido + Rezoy + Kaan - 266 points<br>
7 : Vanyak3kk + Pixie + MariusCOW - 265 points<br>
8 : Fant + BS Hlechis xD + hizixx - 265 points<br>
9 : dinus + G13ras + FRANEK - 264 points<br>
10 : Chap + t3eny + Skvii - 260 points<br>
11 : Fastroki + Focus + JannisZ - 255 points<br>
12 : Ricky + Belusi + Gabix - 254 points<br>
13 : Queasy + Merstach + Th0masHD - 251 points<br>
14 : Robin + Cheatiin + Trexer - 248 points<br>
15 : Ziffyfv + lxrs 25 + Jurdy - 247 points<br>
16 : Polo + Derrede + TINY - 246 points<br>
17 : Sangild + Tidi + Julle - 244 points<br>
18 : Hris + TaySon + Chico - 241 points<br>
19 : Birk + Atlantic Clapzey + Zayni - 241 points<br>
20 : Purchawa + Firen + Maciak - 241 points<br>
21 : Pixx + Darm + demus - 240 points<br>
22 : Mikkel + Sadee32 + Waizyache32 - 240 points<br>
23 : Kombek + Blacha + Mikson - 240 points<br>
24 : noia + aryanly 11 + Yassen 1st - 239 points<br>
25 : Pinq + Nebs + Kiro - 237 points<br>
26 : KANTRI + shur4ǃ + 97default - 237 points<br>
27 : slavik + Kenty + Ve1ryy - 237 points<br>
28 : Setty + charyy + Kami - 236 points<br>
29 : Voxe + Clement + Splik - 234 points<br>
30 : 95V PLUS + VS Mixxu 28 + MichaɇLǃ - 233 points<br>
31 : Syaaz + JarkoÆæǃ + Kiire - 231 points<br>
32 : NOF Letfloǃ + XR Nazer + joshbotfvǃ - 229 points<br>
33 : Mongraal + Nakoo + Turtl3 - 227 point
        </p2>
    </section>
</body>
</html>