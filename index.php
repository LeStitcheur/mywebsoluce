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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/social.css">
</head>

<body>
    <?php
    include 'import/header.html';
    ?>
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