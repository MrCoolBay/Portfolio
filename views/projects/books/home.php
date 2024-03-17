<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/books/style.css">
    <link rel="stylesheet" href="assets/css/books/nav.css">
    <link rel="shortcut icon" href="assets/img/books/Bouqinbazar.png" type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <title>Accueil - BouquinBazar</title>
</head>

<body>
    <nav>
        <!-- Récupération de mon menu  -->
        <?php
        require("menubook.php");
        ?>
    </nav>
    <section class="home-section">
        <div class="topic-text">Accueil</div>
        <p>Bienvenue sur BouqinBazar, <a href="#">LA</a> base de données,</p>
        <p>
            Vous pouvez <a href="indexbook.php?page=books">consulter</a> ou <a href="indexbook.php?page=optionbooks">modifier</a> les livres via le menu de navigation.
        </p>
        <p>
            Vous pouvez également nous contacter via notre <a href="indexbook.php?page=contact">page de contact</a>.
        </p>
        <div class="home-content">
            <div class="img">
                <img src="assets/img/books/Bouqinbazarhigh.png" alt="bibliotheque" height="1000px">
            </div>
        </div>

    </section>
</body>

</html>