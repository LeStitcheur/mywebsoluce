<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebSoluce - Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
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
                    <a href="index.php">Accueil</a>
                </li>
                <li>
                    <a href="about.php">Qui suis-je ?</a>
                </li>
                <li>
                    <a href="prestations.php">Prestations</a>
                </li>
                <li>
                    <a href="outils.php">Boîte à outils</a>
                </li>
                <li>
                    <a href="real.php">Réalisations</a>
                </li>
                <li>
                    <a href="contact.php" class='active'>Contact</a>
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
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="about.php">Qui suis-je ?</a>
                    </li>
                    <li>
                        <a href="prestations.php">Prestations</a>
                    </li>
                    <li>
                        <a href="outils.php">Boîte à outils</a>
                    </li>
                    <li>
                        <a href="real.php">Réalisations</a>
                    </li>
                    <li>
                        <a href="contact.php" class='active'>Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <main>
        <?php
        include 'import/social.html';
        ?>
        <h2>Une envie de site ? Besoin d'un renseignement ? </h2>
        <h1>Contactez-moi !</h1>
        <section class="contact">
            <aside class="contact-left">
                <form action="traitements/mail.php" method="post">
                    <div class="input-group">
                        <input class='input' type="text" name="nom" id="nom" placeholder='  '>
                        <label class='placeholder'>Nom</label>
                    </div>
                    <div class="input-group">
                        <input class='input' type="text" name="prenom" id="prenom" placeholder='  '>
                        <label class='placeholder'>Prénom</label>
                    </div>
                    <div class="input-group">
                        <input class='input' type="email" name="mail" id="mail" placeholder='  '>
                        <label class='placeholder'>Mail</label>
                    </div>
                    <div class="input-group">
                        <input class='input' type="text" name="sujet" id="sujet" placeholder='  '>
                        <label class='placeholder'>Sujet du contact</label>
                    </div>
                    <div class="input-group">
                        <textarea class='input' name="message" id="message" placeholder='  '></textarea>
                        <label class='placeholder'>Votre message</label>
                    </div>
                </form>
            </aside>
            <aside class="contact-right">

            </aside>
        </section>
    </main>
    <footer>

    </footer>
    <script>
        let nav = document.querySelector('nav');
        let trigger = document.querySelector('.menu__mobile__trigger');

        trigger.addEventListener('click', function() {
            nav.classList.toggle('open');
        });
    </script>
</body>

</html>