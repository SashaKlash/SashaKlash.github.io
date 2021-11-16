<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            if(isset($_GET['pg'])){
                switch($_GET['pg']){
                    case "cv";
                        echo "CV";
                        break;
                    case "cv";
                        echo "CV";
                        break;
                
                }
            }
        ?>
    </title>
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
        <?php
    
        ?>
    <link type="text/css" rel="stylesheet" href="css/gallery.css">
</head>
<body>

<?php 
    include_once "import/menu.php";