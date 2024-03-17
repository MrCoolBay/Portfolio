<?php
//Connexion a la base de données 
function DbConnexion()
{
    try {
        $db = new PDO('mysql:host=localhost:3306;dbname=fabienlu_books;charset=utf8', 'httpdocs', 'yk9g51BOMG');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

//Affichage des livres
function DbBooks()
{
    $db = DbConnexion();
    $sql = "SELECT * FROM books";
    $statement = $db->prepare($sql);
    if ($statement->execute()) {
        $ligne = $statement->fetchAll();
    }
    return $ligne;
}
//Fonction Ajout de livres
function DbAddBook($name, $author, $year, $summary)
{
    $db = DbConnexion();
    $sql = "INSERT INTO books (name, author, year, summary) VALUES (:name, :author, :year, :summary)";
    $statement = $db->prepare($sql);
    $statement->bindParam(':name', $name);
    $statement->bindParam(':author', $author);
    $statement->bindParam(':year', $year);
    $statement->bindParam(':summary', $summary);

    if ($statement->execute()) {
        return true;
    }
    return false;
}
//Suppression d'un livre via son nom
function DbDeleteBookByName($name)
{
    $db = DbConnexion();
    $sql = "DELETE FROM books WHERE name = :name";
    $statement = $db->prepare($sql);
    $statement->bindParam(':name', $name);

    if ($statement->execute()) {
        return true;
    }
    return false;
}
function DbEditBook()
{
    $db = DbConnexion();
    $sql = "UPDATE books SET name=?, author=?, year=?, summary=? WHERE id=?";
}
