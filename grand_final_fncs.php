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
    <link rel="stylesheet" href="style_grand_final_fncs.css">
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
        <div class="top-row">
        <p2 class="team-ranking">
            qual with group 1 :<br>
            1 : Hris + TaySon + Chico - 1 144 points<br>
            2 : noia + Misha + Yassen 1st - 1 108 points<br>
            3 : Deckzee + Huty + Art1st - 1 039 points<br>
            4 : Vanyak3kk + Pixie + MariusCOW - 282 points<br>
            5 : dinus + G13ras + FRANEK - 250 points<br>
            6 : IDrop + Sky + Scroll - 244 points<br>
            7 : Artskill + PodaSai + Xsweeze - 237 points<br>
            8 : Cringe + Volko + kiduoo - 211 points<br>
            9 : Ricky + Belusi + Gabix - 204 points<br>
            10 : aryanly 11 + Kayd + 1Vanjkee - 146 points
        </p2>
        <p3 class="team-ranking"> 
            qual with group 2 :<br>
            1 : Ricbor + Zara + Zangi - 1119 points<br>
            2 : Glubschi + prax + Gripey - 1081 points<br>
            3 : Chap + t3eny + Skvii - 1072 points<br>
            4 : SwizzY + Queasy + Merstach - 1072 points<br>
            5 : Robin + Cheatiin + Trexer - 1027 points<br>
            6 : Kombek + Blacha + Mikson - 315 points<br>
            7 : vic0 + Veno + Flickzy - 276 points<br>
            8 : Setty + charyy + Kami - 228 points<br>
            9 : Sangild + Tidi + Julle - 223 points<br>
            10 : P1ng + Wox + Malibuca - 202 points
        </p3>
        <p4 class="team-ranking"> 
            qual with group 3 :<br>
            1 : Vadeal + MrSavage + rezon ay - 1105 points<br>
            2 : Fastroki + Focus + JannisZ - 1099 points<br>
            3 : ARDI + ASP Falex 27 + DarKiizZ - 1066 points<br>
            4 : Pixx + Darm + demus - 1054 points<br>
            5 : Akiira + Kurama + Werex - 1045 points<br>
            6 : Moneymaker + Fnajen + Faded - 208 points<br>
            7 : Pinq + Nebs + Kiro - 207 points<br>
            8 : Shxrk + TruleX + Noahreyli - 205 points<br>
            9 : Th0masHD + Upl + panzer - 204 points<br>
            10 : Juu + F1n4ik + zAndy - 202 points
        </p4>
        </div>
        <p5 class="team-ranking"> 
            qual with last chance :<br>
            1 : Srapt + Hellfire + trippernn - 1000 points<br>
            2 : Nomzz + Auvahalo + Twi - 1000 points<br>
            3 : tjino 1 + PabloWingu + Fredoxie - 1000 points
        </p5>

        <p5>
            dropmap day 1 :
        </p5>
        <img src="grand final fncs day 1.jpg" alt="grand final fncs day 1">
        <p5>
            dropmap day 2 :
        </p5>
        <img src="grand final fncs day 2.jpg" alt="grand final fncs day 2">
    </section>
</body>
</html>