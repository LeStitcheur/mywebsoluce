<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebSoluce - Accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/404.css">
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
        <div id="terminal">
            <div id="output">
                <div id="prompt">$></div>
                <textarea id="input"></textarea>
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