<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebSoluce - Boite à outils</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cards.css">
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
        <section class="card">
            <p>
                <span>
                    <a href="https://geneqrtor.mywebsoluce.fr">
                        <img src="assets/img/pointer.png" alt="Accéder au générateur de QR-Code">
                        <span>Accéder</span>
                    </a>
                    <a href="#">
                        <img src="assets/img/about.png" alt="En savoir plus">
                        <span>En savoir plus</span>
                    </a>
                </span>
            </p>
            <p><span>
                    <a href="https://mentions.mywebsoluce.fr">
                        <img src="assets/img/pointer.png" alt="Accéder au générateur de mentions légales">
                        <span>Accéder</span>
                    </a>
                    <a href="#">
                        <img src="assets/img/about.png" alt="En savoir plus">
                        <span>En savoir plus</span>
                    </a>
                </span></p>
            <p><span>A venir</span></p>
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