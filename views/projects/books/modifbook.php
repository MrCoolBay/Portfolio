<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/books/nav.css">
    <link rel="stylesheet" href="assets/css/books/form.css">
    <link rel="shortcut icon" href="assets/img/Bouqinbazarhigh.png" type="image/x-icon">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <title>Modification de livre - BouquinBazar</title>
</head>

<body>
    <?php
    //var_dump($data);
    //die();
    ?>
    <nav>
        <?php require("menubook.php"); ?>
    </nav>
    <section class="home-section">
        <div class="form">
            <section class="wrapper">
                <div class="form signup">
                    <div class="topic-text title"><span>Modifier un livre</span></div>
                    <form action="indexbook.php?form=edit&modif=<?= $id ?>" method="post">
                        <input type="text" value="<?= $data['name'] ?>" placeholder="<?= $data['name'] ?>" id="name" name="name" />
                        <input type="text" value="<?= $data['author'] ?>" placeholder="<?= $data['author'] ?>" id="author" name="author" />
                        <input type="number" value="<?= $data['year'] ?>" placeholder="<?= $data['year'] ?>" id="year" name="year" />
                        <textarea type="text" placeholder="<?= $data['summary'] ?>" id="summary" name="summary"></textarea>
                        <div class="button">
                            <input type="submit" value="Modifier">
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
</body>

</html>