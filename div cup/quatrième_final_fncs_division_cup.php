<?php
session_start();
// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['pseudo'])) {
    // Redirige vers la page de connexion
    header("../Location: non_connecter_cup.php");
    exit(); // Arrête l'exécution du script après la redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fortnite tournament</title>
    <link rel="stylesheet" href="style_quatrième_final_fncs_division_cup.css">
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
        <img src="final div cup week 4.jpg" alt="final div cup week 4">
        <p2 class="team-ranking">
        open qual :<br>
        1 : Fastroki + Juu + JannisZ - 846 points<br>
2 : Vanyak3kk + Pixie + MariusCOW - 822 points<br>
3 : tjinо + PabloWingu + Fredoxie - 813 points<br>
4 : Pixx + Darm + demus - 776 points<br>
5 : Hyper + Tidi + Julle - 750 points<br>
6 : Rax + Predage + Rad3on - 748 points<br>
7 : FiTo + King Cr1nge ψ + TwitterZynoxFNBR - 724 points<br>
8 : Glubschi + Gripey + rezon ay - 720 points<br>
9 : Purchawa + Firen + Maciak - 719 points<br>
10 : Ricky + Belusi + Gabix - 711 points<br>
11 : Andilex + SkyJump + Momsy - 709 points<br>
12 : Dela + Axeforce + bevvys - 703 points<br>
13 : P1ng + Wox + Malibuca - 699 points<br>
14 : RELLVIS + DABUEL + mck - 698 points<br>
15 : Wheat + NeFrizi + 1Lusha - 693 points<br>
16 : Focus + TruleX + Noahreyli - 690 points<br>
17 : Doom + ghоst fv + Ice - 689 points<br>
18 : Pinq + Nebs + Kiro - 688 points<br>
19 : IDrop + Sky + Scroll - 679 points<br>
20 : Lsodya Putrix52 + wed1prime228qq + Kulb - 677 points<br>
21 : Kombek + Blacha + Mikson - 676 points<br>
22 : Th0masHD + Upl + panzer - 676 points<br>
23 : Vexi + Pixovsky + FLWLSS KIZERS - 674 points<br>
24 : Setty + charyy + Kami - 674 points<br>
25 : Hris + TaySon + Chico - 672 points<br>
26 : Howly 999 + Eltensy + dandepuzo - 668 points<br>
27 : Artskill + PodaSai + Xsweeze - 665 points<br>
28 : Turtle + Kyto + Hijoe - 664 points<br>
29 : vic0 + Veno + Flickzy - 662 points<br>
30 : Cringe + Kayd + Volko - 662 points<br>
31 : Deckzee + Huty + Art1st - 661 points<br>
32 : Anas + S1neD + Refsgaard - 660 points<br>
33 : Auvahalo + Twi + KovaaksXD - 657 points
        </p2>
    </section>
</body>
</html>