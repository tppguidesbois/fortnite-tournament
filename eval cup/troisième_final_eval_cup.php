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
    <link rel="stylesheet" href="style_troisième_final_eval_cup.css">
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
        <img src="final eval cup week 3.jpg" alt="final eval cup week 3">
        <p2 class="team-ranking">
        open qual :<br>
        1 : IDrop + Sky + Scroll - 326 points<br>
2 : P1ng + Wox + Malibuca - 319 points<br>
3 : PabloWingu + Th0masHD + panzer - 289 points<br>
4 : Robban + Pixie + MariusCOW - 269 points<br>
5 : pkr + mck + Maciak - 261 points<br>
6 : Stormy + Marco + Faki - 253 points<br>
7 : JarkoÆæǃ + Nakoo + Kiire - 244 points<br>
8 : Artskill + Floki + Clement - 244 points<br>
9 : Czb + Eclipse + Nxthan - 242 points<br>
10 : Mongraal + Prism + Casperinovic - 241 points<br>
11 : Snayzy + Voxe + Seyyto - 240 points<br>
12 : Asa + Belusi + Gabix - 238 points<br>
13 : JannisZ + Noahreyli + rezon ay - 233 points<br>
14 : Rax + Predage + Rad3on - 233 points<br>
15 : Kenty + AzatGo + R10 Arco281 - 232 points<br>
16 : Monto chepast1k + Bobr + 97default - 232 points<br>
17 : FiTo + King Cr1nge ψ + TwitterZynoxFNBR - 232 points<br>
18 : vic0 + Veno + Flickzy - 231 points<br>
19 : KANTRI + F1n4ik + Upl - 227 points<br>
20 : Stormyrite + Starkus + Ve1ryy - 225 points<br>
21 : tjinо + Sangild + Fredoxie - 223 points<br>
22 : stormySMZ + 220W SaNyaGoD- + Kreg - 223 points<br>
23 : sbarı + Lu984 + ATL AleezGOTÿǃ - 221 points<br>
24 : Akiira + S1neD + Volko - 220 points<br>
25 : SwizzY + Queasy + Merstach - 217 points<br>
26 : Efexy + Liam + Roz -.- - 215 points<br>
27 : Zarbeh + Hen + Yassen 1st - 214 points<br>
28 : Birk + Rash + eSpuma Lepoké - 214 points<br>
29 : Fastroki + Focus + Juu - 214 points<br>
30 : Pixx + Darm + demus - 213 points<br>
31 : Rizquez + eso stxlinadaǃ + Frixx - 212 points<br>
32 : Auvahalo + Twi + Faded - 212 points<br>
33 : Kombek + Blacha + Mikson - 211 points
        </p2>
    </section>
</body>
</html>