<?php
    /* Contrôleur frontal */

    // Chargement des dépendances
    require_once "config.php"; // configuration

    // Si on aun fichier de fonctions, on le charge ici.

    // Si on a besoin de se connecter à une base de données, on se connecte ici.

    // Routeur

    if(!isset($_GET['pg'])){
        // chargement de l'accueil

        include_once "import/index.php";
    }else{
        switch($_GET['pg']){
            case "cv":
                // import du cv
                include_once "import/curriculum.php";
                break;
            case "tuto":
                // import de la pages des tutos
                include_once "import/tutoriels.php";
                break;
            case "photo":
                //import de la page galerie
                include_once "import/galerie.php";
                break;
            case "contact":
                include_once "import/contact";
                break;
        default:
                // chargement de la page d'accueil.
                include_once "import/index.php";
        }
    }
?>