<?php

function headerHTML($css){
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        ';
        if($css){echo '<link rel="stylesheet" href="'.$css.'">';}
        echo '<link rel="stylesheet" href="CSS/header.css">
        <title>Document</title>
    </head>
    <body>
        <div class="grid">
        <div class="logo">
        </div>
        <nav class="nav">
            <li href="" class="nav-i album-link"><a class="nav-link" href="index.php">Album</a></li>
            <li href="" class="nav-i add-link"><a class="nav-link" href="addImage.php">Ajouter un image</a></li>
            <li href="" class="nav-i logout-link"><a class="nav-link" href="logout.php">Se deconnecter</a></li>
        </nav>
        <div class="title">
            <div class="titleAnim">
            <span>
            Galerie Sarzeau
            </span>
            <span>
            Galerie Sarzeau
            </span>
            </div>       
        </div>
        <div class="titleBorder"></div>';
}

?>