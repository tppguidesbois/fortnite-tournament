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
    <link rel="stylesheet" href="style_neuvième_final_eval_cup.css">
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
        <img src="final eval cup week 9.jpg" alt="final eval cup week 9">
        <p2 class="team-ranking">
        open qual :<br>
        1 : ghоst fv + Hyper + Firen - 315 points<br>
2 : Pinq + Nebs + Kiro - 297 points<br>
3 : vic0 + Veno + Flickzy - 297 points<br>
4 : Fastroki + Focus + JannisZ - 290 points<br>
5 : BS Hlechis xD + dandepuzo + hizixx - 286 points<br>
6 : Th0masHD + Upl + panzer - 267 points<br>
7 : dinus + G13ras + FRANEK - 266 points<br>
8 : Snayzy + Voxe + Clement - 265 points<br>
9 : Vanyak3kk + Pixie + MariusCOW - 258 points<br>
10 : Kombek + Blacha + Mikson - 257 points<br>
11 : Shaykoz + Mappi + Momsy - 256 points<br>
12 : Vadeal + MrSavage + rezon ay - 253 points<br>
13 : Stormy + Marco + Faki - 253 points<br>
14 : Hris + TaySon + Chico - 245 points<br>
15 : Ricbor + Zara + Zangi - 245 points<br>
16 : Czb + Eclipse + Nxthan - 242 points<br>
17 : Zahya 23 + Bimbo VIII + FLY DarkyGOTY - 239 points<br>
18 : Chap + t3eny + Skvii - 237 points<br>
19 : Setty + charyy + Kami - 236 points<br>
20 : Polo + TINY + Marvik - 236 points<br>
21 : Cringe + Volko + kiduoo - 234 points<br>
22 : Lenss + LMNY Tas + Jqst1ce - 232 points<br>
23 : sekayg0d + pkr + Veeq - 231 points<br>
24 : Kylie + Cheapz + 9UNA - 231 points<br>
25 : KLAYZ K11 + Crow VII + Joseeh - 230 points<br>
26 : AlbaXna + Squzy + G7 NoobPlays - 229 points<br>
27 : Akiira + Kurama + Werex - 229 points<br>
28 : IDrop + Sky + Scroll - 228 points<br>
29 : Babo Finn Prime + Rash + AQBC Mald1s - 225 points<br>
30 : T E K U 7 4 + Fatal magin + SenQufvǃ - 225 points<br>
31 : Cxshy + DABUEL + Maciak - 225 points<br>
32 : BePro KloceQ + BePro Matez + BePro Foczka - 225 points<br>
33 : fa shizzuǃ + LHC LYROX + Rz Minori - 224 points
        </p2>
    </section>
</body>
</html>