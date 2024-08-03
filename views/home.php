<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>
        Accueil | /FL>
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

    <!-- A propos -->
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
                        Si vous voulez en savoir plus sur mon parcours, vous pouvez consulter mon CV ici <i class="fa-duotone fa-arrow-turn-down"></i>
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

    <!-- Mes compétences -->
    <section class="skills" id="skills">
        <div class="content">
            <div class="title"><span>Mes Compétences</span></div>
            <div class="skills-details">
                <div class="text">
                    <div class="topic">En formation à l'Ecole Supérieur de Génie Informatique</div>
                    <p>Actuellement en formation, je développe mes compétences et les mets à jour chaque fois que je sens avoir progressé, au cours de mes études j'étudie le HTML5, le CSS, le JS, le PHP, le C, ou encore l'administration Linux et Windows.</p>
                    <p>Grâce à mon stage effectué chez <a href="hhtps://thekhtech.com">HK-Tech</a>, j'ai pu améliorer mes compétences et en développer des nouvelles notammenent sur les framework, Vue.JS et Nuxt.</p>
                    <p>J'ai également développer mon expérience en API avec Flask et FastAPI.</p>
                    <div class="experience">
                        <div class="per">5</div>
                        <div class="exp">
                            années <br />
                            d'école
                        </div>
                    </div>
                </div>
                <div class="boxes">
                    <div class="box">
                        <div class="topic"><i class="fa-brands fa-html5"></i> HTML/CSS</div>
                        <div class="allpe">
                            <div class="per">90</div>
                            <div class="perc">
                                <i class="fa-regular fa-percent"></i>
                            </div>
                        </div>

                    </div>
                    <div class="box">
                        <div class="topic"><i class="fa-brands fa-vuejs"></i> Vue.Js/Nuxt</div>
                        <div class="allpe">
                            <div class="per">80</div>
                            <div class="perc">
                                <i class="fa-regular fa-percent"></i>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="topic"><i class="fa-brands fa-js"></i> JavaScript</div>
                        <div class="allpe">
                            <div class="per">85</div>
                            <div class="perc">
                                <i class="fa-regular fa-percent"></i>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="topic"><i class="fa-brands fa-php"></i> PHP</div>
                        <div class="allpe">
                            <div class="per">60</div>
                            <div class="perc">
                                <i class="fa-regular fa-percent"></i>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="topic"><i class="fa-brands fa-linux"></i> Linux</div>
                        <div class="allpe">
                            <div class="per">65</div>
                            <div class="perc">
                                <i class="fa-regular fa-percent"></i>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="topic"><i class="fa-brands fa-python"></i> FastAPI</div>
                        <div class="allpe">
                            <div class="per">60</div>
                            <div class="perc">
                                <i class="fa-regular fa-percent"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mes projets -->
    <section class="services" id="services">
        <div class="content">
            <div class="title"><span>Mes projets</span></div>
            <div class="boxes">
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-code fa-fade"></i>
                    </div>
                    <div class="topic">Développement Web</div>
                    <p>Je réalise des projets dans le cadre de mes études, tels qu’un gestionnaire de base de données de livres, où l’on peut ajouter, modifier et supprimer des livres selon nos préférences.</p>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa-regular fa-paintbrush-pencil fa-fade"></i>
                    </div>
                    <div class="topic">Création de logo</div>
                    <p>Je propose également des services de création de logos pour débutants. Si vous recherchez un logo simple pour votre entreprise, votre marque ou votre projet personnel, n’hésitez pas à me contacter.</p>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa-regular fa-server fa-fade"></i>
                    </div>
                    <div class="topic">Administration Réseau</div>
                    <p>Je travaille actuellement sur la mise en place d’un réseau visant à créer un environnement sécurisé et fonctionnel, adapté aux besoins de l’entreprise ou de l’institution.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contactez Moi -->
    <section class="contact" id="contact">
        <div class="content">
            <div class="title"><span>Contactez-moi</span></div>
            <div class="text">
                <div class="topic">Besoin de me contacter <i class="fa-solid fa-interrobang"></i></div>
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

    <!-- Footer -->
    <footer>
        <div class="text">
            <span>Crée par <a href="#"><i class="fa-solid fa-slash-forward"></i>FabienLubin<i class="fa-solid fa-angle-right"></i></a> avec le <a href=""><i class="fa-regular fa-heart-pulse fa-beat"></i></a></span>
        </div>

    </footer>

    <!-- Compteur JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.per').counterUp({
                time: 1200
            });
        });
    </script>
    <script src="assets/js/script.js"></script>


</body>

</html>