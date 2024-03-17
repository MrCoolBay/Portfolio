
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
function DisplayModifBooks()
{
    DbConnexion();
    require("views/projects/books/modifbooks.php");
}
//Affichage de la page d'ajout de livre
function DisplayAddBook()
{
    DbConnexion();
    require("views/projects/books/addbook.php");
}

//Affichage de la page de gestion
function DisplayOptionBooks()
{
    $data = DbBooks();
    require("views/projects/books/optionbooks.php");
}

// Affichage de la page de contact 
function DisplayContact()
{
    DbConnexion();
    require("views/projects/books/contact.php");
}

// Confirmation de l'ajout de livre
function AddBook()
{
    // Récupération des données du formulaire (simulé)
    $name = $_POST['name'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $summary = $_POST['summary'];

    // Ajout du livre dans la base de données
    $result = DbAddBook($name, $author, $year, $summary);
    if ($result) {
        echo "Le livre a bien été ajouté.";
    } else {
        echo "Une erreur est survenue lors de l'ajout du livre.";
    }
}

//Confirmation de la modification 
function EditBook()
{
}

// Confirmation de la suppression
function DeleteBookByName()
{
    $name = $_GET['delete'];
    $result = DbDeleteBookByName($name);
    if ($result) {
        echo "Le livre a bien été supprimé.";
    } else {
        echo "Une erreur est survenue lors de la suppression du livre.";
    }
    // Après la suppression, rediriger vers la page de consultation des livres
    DisplayBooks();
}
