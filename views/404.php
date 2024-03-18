<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>
        Erreur 404 | /FL>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="shortcut icon" href="assets/img/7.png" type="image/x-icon">
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

</head>

<body>
    <!-- Move to up button -->
    <div class="scroll-button">
        <a href="#home"><i class="fas fa-arrow-up"></i></a>
    </div>
    <!-- Menu de Navigation -->
    <nav>
        <?php require("menu.php") ?>
    </nav>

    <!-- Home -->
    <section class="home" id="home">
        <div class="home-content">
            <div class="text">
                <div class="text-one">La page n'a pas été trouvé,</div>
                <div class="text-two">Erreur</div>
                <div class="text-three">404</div>
            </div>
            <div class="button">
                <form action="index.php?page=home">
                    <button>Revenir à l'acceuil</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>