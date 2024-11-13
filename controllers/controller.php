<?php
require("models/model.php");
function DisplayHome()
{
    require("views/home.php");
}
function DisplayProjectBooks()
{
    require("views/projects/books/home.php");
}
function DisplayErreur()
{
    require("views/404.php");
}

function DisplayRealisations()
{
    require("views/realisations.php");
}