<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>
        Accueil | /FL>
    </title>

    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="shortcut icon" href="assets/img/7.png" type="image/x-icon">
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome" href="/css/app-wa-462d1fe84b879d730fe2180b0e0354e0.css?vsn=d">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <!-- Home Section Start -->
    <section class="home" id="home">
        <div class="home-content">
            <div class="text">
                <div class="text-one">Salut,</div>
                <div class="text-two">Je suis Fabien Lubin</div>
                <div class="text-three">Etudiant en informatique</div>
                <div class="text-four">au sein de l'ESGI à Reims</div>
            </div>
            <div class="button">
                <form action="mailto:contact@fabienlubin.fr" target="_blank">
                    <button>Contactez-moi</button>
                </form>
            </div>
        </div>
    </section>

    <!-- A propos Section Start -->
    <section class="about" id="about">
        <div class="content">
            <div class="title"><span>À propos</span></div>
            <div class="about-details">
                <div class="left">
                    <img src="assets/img/me2.png" alt="hello" />
                </div>
                <div class="right">
                    <div class="topic">L'informatique est ma passion</div>
                    <p>
                        Depuis que je suis tout petit, j'ai toujours été passionné par l'informatique. J'ai commencé à configurer des petits serveurs Minecraft dès le collège, et c'est là que j'ai découvert le développement web. Aujourd'hui, je suis en première année de Bachelor Informatique à l'ESGI, et je compte bien faire de ma passion mon métier.
                    </p>
                    <p>
                        Si vous voulez en savoir plus sur mon parcours, vous pouvez consulter mon CV ici ⤵️
                    </p>
                    <div class="button">
                        <form action="assets/cv/CVFabien.pdf" download>
                            <button>Télécharger mon CV</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mes compétences Section Start -->

    <section class="skills" id="skills">
        <div class="content">
            <div class="title"><span>Mes Compétences</span></div>
            <div class="skills-details">
                <div class="text">
                    <div class="topic">En formation à l'Ecole Supérieur de Génie Informatique</div>
                    <p>Actuellement en formation, je développe mes compétences et les mets à jour chaque fois que je sens avoir progressé, au cours de mes études j'étudie le HTML5, le CSS, le JS, le PhP, le C ou encore l'administration Linux et Windows.</p>
                    <div class="experience">
                        <div class="num">5</div>
                        <div class="exp">
                            années <br />
                            d'école
                        </div>
                    </div>
                </div>
                <div class="boxes">
                    <div class="box">
                        <div class="topic">HTML</div>
                        <div class="per">85%</div>
                    </div>
                    <div class="box">
                        <div class="topic">CSS</div>
                        <div class="per">70%</div>
                    </div>
                    <div class="box">
                        <div class="topic">JavScript</div>
                        <div class="per">10%</div>
                    </div>
                    <div class="box">
                        <div class="topic">PHP</div>
                        <div class="per">40%</div>
                    </div>
                    <div class="box">
                        <div class="topic">Linux</div>
                        <div class="per">75%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mes projets Section Start -->
    <section class="services" id="services">
        <div class="content">
            <div class="title"><span>Mes projets</span></div>
            <div class="boxes">
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <div class="topic">Développement Web</div>
                    <p>Je réalise des projets dans le cadre de mes études, tels qu'un gestionnaire de base de données de livres où l'on peut ajouter, modifier et supprimer des livres selon nos préférences.</p>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa-regular fa-paintbrush-pencil"></i>
                    </div>
                    <div class="topic">Création de logo</div>
                    <p>Je propose également des services de création de logos débutants. Si vous recherchez un logo simple pour votre entreprise, votre marque ou votre projet personnel, n'hésitez pas à me contacter.</p>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa-regular fa-server"></i>
                    </div>
                    <div class="topic">Administration Réseau</div>
                    <p>Je travaille actuellement sur un projet de mise en place d'un réseau. Ce projet vise à créer un environnement de réseau sécurisé et fonctionnel, adapté aux besoins de l'entreprise ou de l'institution.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Me section Start -->
    <section class="contact" id="contact">
        <div class="content">
            <div class="title"><span>Contactez-moi</span></div>
            <div class="text">
                <div class="topic">Besoin de me contacter ?</div>
                <p>Si vous êtes à la recherche d'un stagiaire ou d'un alternant motivé et passionné par l'informatique, n'hésitez pas à me contacter. Je serais ravi de discuter de la possibilité de collaborer avec vous et de contribuer au succès de votre entreprise.
                </p>
                <p>
                    Fort de mes connaissances et de mon expérience, je suis également en mesure de réaliser des projets informatiques de petite envergure de manière autonome et efficace.
                </p>
                <div class="button">
                    <form action="mailto:contact@fabienlubin.fr" target="_blank">
                        <button>Commençons</button>
                    </form>
                </div>
                <div class="media-icons">
                    <a href="https://www.linkedin.com/in/fabien-lubin-695344291/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://instagram.com/fablbn_" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://github.com/MrCoolBay" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section Start -->
    <footer>
        <div class="text">
            <span>Crée par <a href="#">/FabienLubin></a> avec le <i class="fa-regular fa-heart-pulse fa-beat"></i></span>
        </div>

    </footer>

    <script src="assets/js/script.js"></script>
</body>

</html>