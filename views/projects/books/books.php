<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/books/style.css">
    <link rel="stylesheet" href="assets/css/books/nav.css">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/Bouqinbazarhigh.png" type="image/x-icon">
    <title>Affichage - BouquinBazar</title>
</head>

<body>
    <nav>
        <?php require("menubook.php"); ?>
    </nav>
    <section class="home-section">
        <div class="livres">
            <div class="topic-text">Consultez les livres</div>
            <table>
                <tr class="header">
                    <td class="auteur">Auteur</td>
                    <td>Nom</td>
                    <td>Année</td>
                    <td class="resume">Résumé</td>
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