<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebSoluce - Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
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