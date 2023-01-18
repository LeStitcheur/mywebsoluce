<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebSoluce - Accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/social.css">
    <link rel="shortcut icon" href="assets/img/Logo-Blue.png" type="image/x-icon">
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php" class='desk'>
                <img src="assets/img/MyWebSoluce-Logo-Ligne-Blue.png" alt="Logo MyWebSoluce">
            </a>
            <a href="index.php" class='mobile'>
                <img src="assets/img/MyWebSoluce-Logo-White.png" alt="Logo MyWebSoluce">
            </a>
        </div>
        <nav id="menu">
            <ul class="menu__desktop">
                <li>
                    <a href="index.php" class='active'>Accueil</a>
                </li>
                <li>
                    <a href="about.html">Qui suis-je ?</a>
                </li>
                <li>
                    <a href="prestations.html">Prestations</a>
                </li>
                <li>
                    <a href="outils.html">Boîte à outils</a>
                </li>
                <li>
                    <a href="real.html">Réalisations</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
            <div class="menu__mobile">
                <span class="menu__mobile__trigger">
                    <svg viewBox="0 0 175 80" width="40" height="40">
                        <rect width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                        <rect y="30" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                        <rect y="60" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                    </svg>
                    <span>MENU</span>
                </span>
                <ul class="menu__mobile__list">
                    <li>
                        <a href="index.html" class='active'>Accueil</a>
                    </li>
                    <li>
                        <a href="about.html">Qui suis-je ?</a>
                    </li>
                    <li>
                        <a href="prestations.html">Prestations</a>
                    </li>
                    <li>
                        <a href="outils.html">Boîte à outils</a>
                    </li>
                    <li>
                        <a href="real.html">Réalisations</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <main>
        <?php
        include 'import/social.html';
        ?>
        <div class="container">
            <div class="container_terminal">
                </>
                <div class="terminal_toolbar">
                    <div class="butt">
                        <button class='btn btn-color'>&#10006;</button>
                        <button class='btn'>&#128469;</button>
                        <button class='btn'>&#128470;</button>
                    </div>
                    <p class="user">LeStitcheurFou@admin: ~</p>
                </div>
                <div class="terminal_body">
                    <div class="terminal_promt">
                        <span class="terminal_user">LeStitcheurFou@admin:</span>
                        <span class="teminal_location">~</span>
                        <span class="teminal_bling">$</span>

                    </div>
                    <div class="terminal_content">
                        <p class="terminal_text">
                            <span class="terminal_text__line">
                                <span class="terminal_text__line__text">Bonjour, je suis Alexandre Harel, <strong>développeur web / web mobile</strong> et créateur de <strong>MyWebSoluce&copy</strong>.</span>
                            </span>
                            <span class="terminal_text__line">
                                <span class="terminal_text__line__text">Je vous propose mes services pour la <strong>création de votre site web.</strong></span>
                            </span>
                            <span class="terminal_text">
                                <span class="terminal_text__line">Je vous propose aussi des services de <strong>formation et de médiation numérique.</strong></span>
                            </span>
                            <span class="terminal_text__line">
                                <span class="terminal_text__line__text"><strong>Accessibilité</strong>, <strong>éthique</strong>, <strong>écoconception</strong>, sont mes maîtres mots</span>
                            </span>
                            <span class="terminal_text__line">
                                <span class="terminal_text__line__text">Vous pouvez me contacter via le formulaire de contact.</span>
                            </span>
                            <span class="terminal_text__line">
                                <span class="terminal_text__line__text">Bonne visite !</span>
                            </span>
                        </p>
                        <img src="assets/img/pdp.png" alt="Photo de profil Alexandre Harel">
                    </div>
                    <div class="terminal_promt">
                        <span class="terminal_user">lestitcheurfou@admin:</span>
                        <span class="teminal_location">~</span>
                        <span class="teminal_bling">$</span>
                        <span class="terminal_cursor"></span>
                    </div>
                    <div class="buttons">
                        <button class="link">
                            <a href="contact.html">Me Contacter</a>
                        </button>
                        <button class="link">
                            <a href="prestations.html">Voir mes prestations</a>
                        </button>
                    </div>
                </div>
            </div>
    </main>
    <footer>

    </footer>
    <script src="assets/js/menu.js"></script>
    <script src="assets/js/social.js"></script>
    <script src="assets/js/vanilla-tilt.min.js"></script>

</body>

</html>