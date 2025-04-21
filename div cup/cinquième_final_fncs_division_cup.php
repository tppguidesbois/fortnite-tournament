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
    <link rel="stylesheet" href="style_cinquième_final_fncs_division_cup.css">
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
        <img src="final eval cup week 5.jpg" alt="final eval cup week 5">
        <p2 class="team-ranking">
        1 : Th0masHD + Upl + panzer - 871 points<br>
2 : vic0 + Veno + Flickzy - 790 points<br>
3 : IDrop + Sky + Scroll - 765 points<br>
4 : noia + Kyry + Casperinovic - 765 points<br>
5 : FiTo + King Cr1nge ψ + TwitterZynoxFNBR - 764 points<br>
6 : Turtle + Kyto + Hijoe - 751 points<br>
7 : Cringe + Kayd + Volko - 748 points<br>
8 : Sangild + Tidi + Julle - 738 points<br>
9 : tjinо + PabloWingu + Fredoxie - 735 points<br>
10 : Shxrk + TruleX + Noahreyli - 733 points<br>
11 : Pinq + Nebs + Kiro - 717 points<br>
12 : SwizzY + Queasy + Merstach - 702 points<br>
13 : Dela + Axeforce + bevvys - 701 points<br>
14 : Artskill + PodaSai + Xsweeze - 698 points<br>
15 : Chap + t3eny + Skvii - 694 points<br>
16 : Setty + charyy + Kami - 688 points<br>
17 : dinus + G13ras + FRANEK - 679 points<br>
18 : Gordete + Scaryy + PRS Joaneヤvyxǃ - 674 points<br>
19 : Rizquez + eso stxlinadaǃ + Frixx - 671 points<br>
20 : Syaaz + Jarkordp23ǃ + Kiire - 671 points<br>
21 : Vanyak3kk + Pixie + MariusCOW - 667 points<br>
22 : Pixx + Darm + demus - 665 points<br>
23 : Srapt + Hellfire + trippernn - 661 points<br>
24 : Focus + Mongraal + zAndy - 654 points<br>
25 : Monto Gold7 + bs palochkaǃ + Kirb1 - 648 points<br>
26 : Skrill + Cheapz + kiduoo - 647 points<br>
27 : VoltiaX + cool + Siren - 646 points<br>
28 : Maxiking + prax + AmoZz - 639 points<br>
29 : Robin + Cheatiin + Trexer - 638 points<br>
30 : Floki + Snayzy + Icee - 638 points<br>
31 : Akiira + Kurama + Werex - 637 points<br>
32 : 123lolboringgame + marky 444 + ECV Brasil - 635 points<br>
33 : Shaykoz + Voxe + Pirozz - 630 points
        </p2>
</body>
</html>