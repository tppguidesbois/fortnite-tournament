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
    <link rel="stylesheet" href="style_quatrième_final_eval_cup.css">
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
        <img src="final eval cup week 4.jpg" alt="final eval cup week 4">
        <p2 class="team-ranking">
        1 : SwizzY + Queasy + Merstach - 298 points<br>
2 : dinus + G13ras + FRANEK - 287 points<br>
3 : Srapt + Tidi + KovaaksXD - 278 points<br>
4 : Deka + Autm0 + Andyz - 277 points<br>
5 : Abdelfnr + Hedra + bubuzrr - 270 points<br>
6 : IDrop + Sky + Scroll - 267 points<br>
7 : Mongraal + Prism + Casperinovic - 266 points<br>
8 : Doom + ghоst fv + Ice - 261 points<br>
9 : Artskill + PodaSai + Xsweeze - 256 points<br>
10 : 1Vanjkee + Pixovsky + Battercry - 251 points<br>
11 : Trooly 77 + AX xenX + Jakebucà - 244 points<br>
12 : Hyper + Rlyss + Mirooz - 243 points<br>
13 : TruleX + t3eny + Skvii - 243 points<br>
14 : JannisZ + Noahreyli + rezon ay - 241 points<br>
15 : Kenty + AzatGo + R10 Arco281 - 238 points<br>
16 : Snayzy + Voxe + Icee - 237 points<br>
17 : AceFrac + kent1kfnz + AmoZz - 234 points<br>
18 : Anas + S1neD + Refsgaard - 233 points<br>
19 : 95V Relq + Veeq + ogryzek281 - 230 points<br>
20 : Babo Finn Prime + SHRSHF + AQBC Mald1s - 228 points<br>
21 : Druxyz + Klown + Waizyache32 - 225 points<br>
22 : Wheat + NeFrizi + 1Lusha - 225 points<br>
23 : ENIX Nayzix + nociff. + Nayte - 224 points<br>
24 : Rax + Predage + Rad3on - 222 points<br>
25 : Howly 999 + Eltensy + dandepuzo - 221 points<br>
26 : L0WK3Y + Mikkel + Liwshe - 220 points<br>
27 : RELLVIS + Cxshy + DABUEL - 219 points<br>
28 : Adesito + paceve + Marvik - 218 points<br>
29 : pkr + Vexi + FLWLSS KIZERS - 214 points<br>
30 : ATL Cehku + FZNDINHOO + lukq - 214 points<br>
31 : Pinq + Nebs + Kiro - 210 points<br>
32 : Purchawa + Firen + Maciak - 210 points<br>
33 : Setty + charyy + Kami - 210 points
        </p2>
    </section>
</body>
</html>