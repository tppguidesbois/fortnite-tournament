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
    <link rel="stylesheet" href="style_troisième_final_fncs_division_cup.css">
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
        <img src="final div cup week 3.jpg" alt="final div cup week 3">
        <p2 class="team-ranking">
        open qual :<br>
        1 : Pixx + Darm + demus - 841 points<br>
2 : Cringe + Kayd + Volko - 769 points<br>
3 : Vanyak3kk + Pixie + MariusCOW - 760 points<br>
4 : Hris + TaySon + Chico - 760 points<br>
5 : SwizzY + Queasy + Focus - 743 points<br>
6 : Robin + Cheatiin + Trexer - 738 points<br>
7 : Czb + Eclipse + Nxthan - 738 points<br>
8 : IDrop + Sky + Scroll - 735 points<br>
9 : Gordete + Scaryy + PRS Joaneヤvyxǃ - 719 points<br>
10 : vic0 + Veno + Flickzy - 707 points<br>
11 : Vexi + Pixovsky + FLWLSS KIZERS - 696 points<br>
12 : Chap + Shxrk + kiduoo - 693 points<br>
13 : P1ng + Wox + Malibuca - 687 points<br>
14 : Wheat + NeFrizi + 1Lusha - 683 points<br>
15 : FiTo + King Cr1nge ψ + TwitterZynoxFNBR - 681 points<br>
16 : Th0masHD + Upl + panzer - 669 points<br>
17 : Shaykoz + Pirozz + Plaazy - 668 points<br>
18 : Setty + charyy + Kami - 665 points<br>
19 : Akiira + SkyJump + Kurama - 660 points<br>
20 : Anas + S1neD + Refsgaard - 656 points<br>
21 : Kombek + Blacha + Mikson - 653 points<br>
22 : dinus + G13ras + FRANEK - 652 points<br>
23 : Dela + Axeforce + bevvys - 638 points<br>
24 : JannisZ + Noahreyli + rezon ay - 636 points<br>
25 : Rax + Predage + Rad3on - 630 points<br>
26 : Druxyz + Moneymaker + Fnajen - 628 points<br>
27 : TruleX + t3eny + Skvii - 626 points<br>
28 : Fastroki + Juu + zAndy - 624 points<br>
29 : Ricbor + Zara + Zangi - 621 points<br>
30 : Monto Gold7 + bs palochkaǃ + Kirb1 - 617 points<br>
31 : Velo + Stanfps + hizixx - 610 points<br>
32 : Artskill + PodaSai + Xsweeze - 607 points<br>
33 : zahyäǃ + Bimbo VIII + FLY DarkyGOTY - 602 points
        </p2>
    </section>
</body>
</html>