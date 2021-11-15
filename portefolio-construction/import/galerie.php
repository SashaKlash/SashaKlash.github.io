<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie</title>
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/gallery.css">
</head>
<body>
    
    <?php
    include "header.php";
    ?>
    <h1>Galerie</h1>

    <section id="index-gallery" class="wrapper-gallery">
        <h2>Ma Galerie Photo</h2>
        <div class="gallery-img img1">
            <div><a href="images/img1.JPG">Sculpture à Berlin</a></div>
        </div>
        <div class="gallery-img img2">
            <div><a href="images/img2.JPG">Centrale hydraulique de Forest</a></div>
        </div>
        <div class="gallery-img img3">
            <div><a href="images/img3.JPG">Avenue Louise - Bruxelles</a></div>
        </div>
        <div class="gallery-img img4">
            <div><a href="images/img4.JPG">This is a title</a></div>
        </div>
        <div class="gallery-img img5">
            <div><a href="images/img5.JPG">This is a title</a></div>
        </div>
        <div class="gallery-img img6">
            <div><a href="images/img6.JPG">Panneau - Bruxelles (Centre-ville)</a></div>
        </div>
        <div class="gallery-img img7">
            <div><a href="images/img7.JPG">Gand</a></div>
        </div>
    </section>

    <script src="js/gallery.js"></script>

    <?php
      include_once "footer.php"
    ?>