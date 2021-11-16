<?php
    /* Contrôleur frontal */

    // Chargement des dépendances
    require_once "config.php"; // configuration

    // Si on a un fichier de fonctions, on le charge ici.

    // Si on a besoin de se connecter à une base de données, on se connecte ici.

    // Routeur

    if(!isset($_GET['pg'])){
        // chargement de l'accueil

        include_once "import/home.php";
    }else{
        if($_GET['pg']==='cv'){
            include_once "import/curriculum.php"
        }
    }