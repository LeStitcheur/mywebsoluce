<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebSoluce - Accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/prestations.css">
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
        <h1>Mes prestations</h1>
        <section id='catagory'>
            <a href="">Création de site web</a>
            <a href="">Formation et initiation</a>
            <a href=""></a>
        </section>
        <section id="dev">
            <div class="card">
                <div class="align">
                    <span class="red"></span>
                    <span class="yellow"></span>
                    <span class="green"></span>
                    <aside class="price">à partir de 649€</aside>
                </div>
                <h2>Site vitrine</h2>
                <p>Un site vitrine est un site web qui présente votre entreprise, votre activité, vos produits ou services. Il est
                    le premier contact que vos clients auront avec vous. Il doit donc être clair, simple et efficace. Il doit
                    être facilement accessible et doit donner envie à vos visiteurs de vous contacter.</p>
            </div>
            <div class="card">
                <div class="align">
                    <span class="red"></span>
                    <span class="yellow"></span>
                    <span class="green"></span>
                    <aside class="price">à partir de 829€</aside>
                </div>
                <h2>Site catalogue</h2>
                <p>Un site catalogue est un site web qui présente votre entreprise, votre activité, vos produits ou services. Il est
                    le premier contact que vos clients auront avec vous. Il doit donc être clair, simple et efficace. Il doit
                    être facilement accessible et doit donner envie à vos visiteurs de vous contacter.</p>
            </div>
            <div class="card">
                <div class="align">
                    <span class="red"></span>
                    <span class="yellow"></span>
                    <span class="green"></span>
                    <aside class="price">à partir de 1249€</aside>
                </div>
                <h2>Site e-commerce</h2>
                <p>Un site e-commerce est un site web qui présente votre entreprise, votre activité, vos produits ou services. Il est
                    le premier contact que vos clients auront avec vous. Il doit donc être clair, simple et efficace. Il doit
                    être facilement accessible et doit donner envie à vos visiteurs de vous contacter.</p>

        </section>

        <section class='comparaison'>
            <table>
                <thead></thead>
                <tbody></tbody>
            </table>
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