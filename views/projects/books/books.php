<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/books/style.css">
    <link rel="stylesheet" href="assets/css/books/nav.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="shortcut icon" href="assets/img/books/Bouqinbazarhigh.png" type="image/x-icon">
    <title>Affichage - BouquinBazar</title>
</head>

<body>
    <nav>
        <?php require("menubook.php"); ?>
    </nav>
    <section class="home-section">
        <div class="livres">
            <div class="topic-text title"><span>Consultez les livres</span></div>
            <table>
                <tr class="header">
                    <td class="auteur"><i class="fa-duotone fa-signature"></i> Auteur</td>
                    <td><i class="fa-duotone fa-input-text"></i> Nom</td>
                    <td><i class="fa-duotone fa-calendar"></i> Année</td>
                    <td class="resume"><i class="fa-duotone fa-comments"></i> Résumé</td>
                </tr>
                <!-- Récupération des données -->
                <?php
                foreach ($data as $book) {
                ?>
                    <tr class="data">
                        <!-- Affichage des données -->
                        <td><?= htmlspecialchars($book['author']) ?></td>
                        <td><?= nl2br(htmlspecialchars($book['name'])) ?></td>
                        <td><?= nl2br(htmlspecialchars($book['year'])) ?></td>
                        <td class="summary"><?= nl2br(htmlspecialchars($book['summary'])) ?></td>

                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </section>
</body>

</html>