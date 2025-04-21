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
    <link rel="stylesheet" href="style_première_final_fncs_division_cup.css">
</head>
<body>
    <section class="nav-section">
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
                <?php endif; ?>
            </ul>
        </nav>
    </section>

    <section class="image-section">
        <img src="final div cup week 1.jpg" alt="final div cup week 1">
        <p2 class="team-ranking">
        1 : Vanyak3kk + Pixie + MariusCOW - 869 points<br>
    2 : Chap + Shxrk + kiduoo - 860 points<br>
    3 : Pixx + Darm + demus - 762 points<br>
    4 : P1ng + Aight + Wox - 721 points<br>
    5 : SwizzY + Queasy + Merstach - 713 points<br>
    6 : dinus + G13ras + FRANEK - 689 points<br>
    7 : Setty + charyy + Kami - 663 points<br>
    8 : JannisZ + Noahreyli + rezon ay - 651 points<br>
    9 : TruleX + TaySon + Chico - 634 points<br>
    10 : Hris + Th0masHD + panzer - 630 points<br>
    11 : Misha + t3eny + Skvii - 622 points<br>
    12 : vic0 + Veno + Flickzy - 612 points<br>
    13 : Efexy + Dela + Axeforce - 611 points<br>
    14 : Pinq + Nebs + Seyyto - 609 points<br>
    15 : Fastroki + Focus + Juu - 606 points<br>
    16 : Tropex + Tobko + F1shyX - 603 points<br>
    17 : Nomzz + Rezoy + Gripey - 602 points<br>
    18 : PSY + Knacke + Niqez - 600 points<br>
    19 : FiTo + King Cr1nge ψ + TwitterZynoxFNBR - 599 points<br>
    20 : Kombek + Blacha + Mikson - 599 points<br>
    21 : Hyper + Julle + Rlyss - 597 points<br>
    22 : Howly 999 + Eltensy + dandepuzo - 597 points<br>
    23 : IDrop + Sky + Scroll - 591 points<br>
    24 : Akiira + S1neD + Volko - 590 points<br>
    25 : RELLVIS + Cxshy + DABUEL - 583 points<br>
    26 : Turtle + Kylie + Kaan - 578 points<br>
    27 : aryanthweeen + 1Vanjkee + Battercry - 572 points<br>
    28 : Wheat + NeFrizi + 1Lusha - 569 points<br>
    29 : Auvahalo + Twi + Faded - 561 points<br>
    30 : Artskill + Floki + Clement - 560 points<br>
    31 : Rax + Predage + Rad3on - 555 points<br>
    32 : PodaSai + Xsweeze + Momsy - 551 points<br>
    33 : Robin + Cheatiin + Trexer - 545 points
        </p2>
    </section>
</body>
</html>