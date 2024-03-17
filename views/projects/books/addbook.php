<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/books/nav.css">
    <link rel="stylesheet" href="assets/css/books/form.css">
    <link rel="shortcut icon" href="assets/img/books/Bouqinbazarhigh.png" type="image/x-icon">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <title>Ajout - BouquinBazar</title>
</head>

<body>
    <nav>
        <?php require("menubook.php"); ?>
        <section class="home-section">
            <div class="form">
                <?php
                require("form.php"); ?>
            </div>
        </section>
    </nav>
</body>

</html>