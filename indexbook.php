<?php
require("controllers/controllerbook.php");


if (isset($_GET["delete"]) && !empty($_GET["delete"])) {
    DeleteBookByName();
} elseif (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page = htmlspecialchars($_GET["page"]);

    if ($page == "home") {
        DisplayHome();
    } elseif ($page == "books") {
        DisplayBooks();
    } elseif ($page == "optionbooks") {
        DisplayOptionBooks($id, $name, $author, $year, $summary);
    } elseif ($page == "addbook") {
        DisplayAddBook();
    } elseif ($page == "correct") {
        DisplayCorrect();
    } elseif ($page == "modifbook") {
        if (isset($_GET["modif"]) && !empty($_GET["modif"])) {
            $id = htmlspecialchars($_GET["modif"]);
            DisplayModifBook($id);
        }
    }
} elseif (isset($_GET["form"]) && !empty($_GET["form"])) {
    $form = htmlspecialchars($_GET["form"]);
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $form == "add") {
        AddBook();
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && $form == "edit") {
        if (isset($_GET["modif"]) && !empty($_GET["modif"])) {
            $id = htmlspecialchars($_GET["modif"]);
            EditBook($id);
        }
    }
} else {
    DisplayHome();
}
