<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebSoluce - Accueil</title>
    <link rel="stylesheet" href="css/style.css">
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
                    <a href="real.php" class='active'>Réalisations</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
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
                        <a href="real.php" class='active'>Réalisations</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <main>
        <?php
        include 'import/social.html';
        ?>
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