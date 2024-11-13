<?php
require("controllers/controller.php");
if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page = htmlspecialchars($_GET["page"]);

    if ($page == "home") {
        DisplayHome();
    } else if ($page == "homebook") {
        DisplayProjectBooks();
    } else if ($page == "404") {
        DisplayErreur();
    } else if ($page == "realisations") {
        DisplayRealisations();
    } else {
        DisplayErreur();
    }
} else {
    DisplayHome();
}
