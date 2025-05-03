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
    <link rel="stylesheet" href="style_deuxième_final_fncs_division_cup.css">
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
        <img src="final div cup week 2.jpg" alt="final div cup week 2">
        <p2 class="team-ranking">
        open qual :<br>
        1 : vic0 + Veno + Flickzy - 847 points<br>
    2 : Pixx + Darm + demus - 834 points<br>
    3 : Vanyak3kk + Pixie + MariusCOW - 783 points<br>
    4 : Pinq + Nebs + Kiro - 769 points<br>
    5 : Hris + TaySon + Chico - 701 points<br>
    6 : dinus + G13ras + FRANEK — 696 points<br>
    7 : PabloWingu + Th0masHD + panzer - 682 points<br>
    8 : tjinо + Sangild + Fredoxie - 670 points<br>
    9 : Ricbor + Zara + Zangi - 670 points<br>
    10 : Hris + Th0masHD + panzer - 630 points<br>
    11 : FiTo + King Cr1nge ψ + TwitterZynoxFNBR - 664 points<br>
    12 : Vexi + Pixovsky + FLWLSS KIZERS - 662 points<br>
    13 : SwizzY + Queasy + Merstach - 658 points<br>
    14 : Turtle + Kylie + Kaan - 658 points<br>
    15 : Howly 999 + Eltensy + dandepuzo - 650 points<br>
    16 : Asa + Belusi + Gabix - 643 points<br>
    17 : P1ng + Wox + Malibuca - 639 points<br>
    18 : Setty + charyy + Kami - 637 points<br>
    19 : IDrop + Sky + Scroll - 631 points<br>
    20 : Auvahalo + Twi + Faded - 630 points<br>
    21 : EGO EGO EGO B2B + KryFalse + iFr0zi - 628 points<br>
    22 : TruleX + t3eny + Skvii - 627 points<br>
    23 : vlrs skw281 + Gobaw + SereN - 626 points<br>
    24 : Hyper + Julle + Rlyss - 623 points<br>
    25 : EvozA Spexx + 2Trash1zr + Stanfps - 623 points<br>
    26 : Snayzy + Voxe + Icee - 621 points<br>
    27 : RELLVIS + Cxshy + DABUEL - 618 points<br>
    28 : Ankido + Kyto + Hijoe - 614 points<br>
    29 : Deckzee + VoltiaX + Art1st - 608 points<br>
    30 : Fastroki + Focus + Juu - 607 points<br>
    31 : Dela + Axeforce + bevvys - 598 points<br>
    32 : Chap + Shxrk + kiduoo - 593 points<br>
    33 : rz layn 23 + Kyry + nano 9 - 592 points
        </p2>
    </section>
</body>
</html>