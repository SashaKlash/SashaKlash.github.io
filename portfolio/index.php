<?php
    require_once "config.php"; // configuration

    // fonctions,  ici.

    // se connecter à une base de données, ici.

    // Routeur
    include_once "IMPORT/header.php";

        // si il existe une variable GET nommée 'pg'
     if(isset($_GET['pg'])){
        if(in_array($_GET['pg'], IMPORT)){
                include_once "IMPORT/".$_GET['pg'].".php";
            }else{
                include_once "IMPORT/erreur404.php";
            }   
        }else{
            include_once "IMPORT/home.php";
        }

    include_once "IMPORT/footer.php";

