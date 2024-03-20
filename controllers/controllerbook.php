
<?php
require("models/modelbook.php");

//Affchage de la page d'accueil
function DisplayHome()
{
    require("views/projects/books/home.php");
}

//Affichage de la page de consultation
function DisplayBooks()
{
    $data = DbBooks();
    require("views/projects/books/books.php");
}

//Affichage de la page de modification
function DisplayModifBook($id)
{
    $data = DbBookID($id);
    //$data = DbBooks();
    require("views/projects/books/modifbook.php");
}
//Affichage de la page d'ajout de livre
function DisplayAddBook()
{
    DbConnexion();
    require("views/projects/books/addbook.php");
}

//Affichage de la page de gestion
function DisplayOptionBooks($id, $name, $author, $year, $summary)
{
    $dataID = DbBookID($id);
    $data = DbBooks();
    require("views/projects/books/optionbooks.php");
}

// Affichage des confirmations ou non confirmations
function DisplayCorrect()
{
    require("views/projects/books/correct.php");
}
function DisplayIncorrect()
{
    require("views/projects/books/incorrect.php");
}
function DisplayDelete()
{
    require("views/projects/books/delete.php");
}
function DisplayNoDelete()
{
    require("views/projects/books/nodelete.php");
}
function DisplayModifCorrect()
{
    require("views/projects/books/modifcorrect.php");
}
function DisplayModifIncorrect()
{
    require("views/projects/books/modifincorrect.php");
}

// Confirmation de l'ajout de livre
function AddBook()
{
    // Récupération des données du formulaire 
    $name = htmlspecialchars_decode($_POST['name']);
    $author = htmlspecialchars_decode($_POST['author']);
    $year = htmlspecialchars_decode($_POST['year']);
    $summary = htmlspecialchars_decode($_POST['summary']);

    // Ajout du livre dans la base de données
    $result = DbAddBook($name, $author, $year, $summary);
    if ($result) {
        DisplayCorrect();
    } else {
        DisplayIncorrect();
    }
}

//Confirmation de la modification 
function EditBook($id)
{
    //Récupération des données du formulaire
    $name = htmlspecialchars_decode($_POST['name']);
    $author = htmlspecialchars_decode($_POST['author']);
    $year = htmlspecialchars_decode($_POST['year']);
    $summary = htmlspecialchars_decode($_POST['summary']);

    //Modif du livre
    $result = DbEditBook($id, $name, $author, $year, $summary);
    if ($result) {
        DisplayModifCorrect();
    } else {
        DisplayModifIncorrect();
    }
}

// Confirmation de la suppression
function DeleteBookByName()
{
    $name = htmlspecialchars_decode($_GET['delete']);
    $result = DbDeleteBookByName($name);
    if ($result) {
        DisplayDelete();
    } else {
        DisplayNoDelete();
    }
    // Après la suppression, rediriger vers la page de consultation des livres
    DisplayBooks();
}
