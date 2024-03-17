<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Contact - BouquinBazar </title>
    <link rel="stylesheet" href="assets/css/books/style.css">
    <link rel="stylesheet" href="assets/css/books/nav.css">
    <link rel="stylesheet" href="assets/css/books/contact.css">
    <link rel="shortcut icon" href="assets/img/Bouqinbazarhigh.png" type="image/x-icon">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav>
        <?php
        require("menubook.php")
        ?>
    </nav>
    <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Adresse</div>
                    <div class="text-one">46 rue de la justice</div>
                    <div class="text-two">Reims</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Téléphone</div>
                    <div class="text-one">+33 6 42 27 20 89</div>

                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">fabnino51@gmail.com</div>
                    <div class="text-two">contact@esgi.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Envoyez-nous un message</div>
                <p>Si vous avez des questions ou des améliorations à proposer contactez-nous.</p>
                <form action="#">
                    <div class="input-box">
                        <input type="text" placeholder="Entrez votre nom">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Entrez votre email">
                    </div>
                    <div class="input-box message-box">

                    </div>
                    <div class="button">
                        <input type="button" value="Envoyez">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>