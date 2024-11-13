<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Réalisations | /FL></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/realisation.css" />
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

    <!-- Section Réalisations -->
    <section class="realisations" id="realisations">
        <div class="content">
            <div class="title">
                <span>Mes Réalisations</span>
            </div>
            <div class="projects-grid">
                <!-- Projet 1 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="assets/img/mercuria.png" alt="Projet 1">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Mercuria RP</h3>
                        <p class="project-description">Le site de mon serveur RP FiveM.</p>
                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JS</span>
                            <span>SQL</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link"><i class="fas fa-link"></i> Voir le projet</a>
                        </div>
                    </div>
                </div>

                <!-- Projet 2 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="assets/img/portfolio.png" alt="Portfolio">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Portfolio Personnel</h3>
                        <p class="project-description">Mon portfolio personnel présentant mes compétences et réalisations.</p>
                        <div class="project-tech">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>PHP</span>
                        </div>
                        <div class="project-links">
                            <a href="index.php?page=home" class="project-link"><i class="fas fa-link"></i> Voir le projet</a>
                            <a href="https://github.com/MrCoolBay/Portfolio" class="project-link"><i class="fab fa-github"></i> Code source</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/script.js"></script>
</body>

</html>