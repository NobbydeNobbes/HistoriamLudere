<?php
$dsn="mysql:host=localhost;dbname=historiamludere";
$db= new PDO($dsn, "root", "");
$query = $db->query("SELECT * FROM characters");
$characters= $query->fetchAll();





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/style/main.css">
    <title>Historiam Ludere</title>
</head>
<body>
    <div class="page">
        <div class="title">
            <input id="search-bar" type="text" placeholder="rechercher un personnage"
            name="search-bar">
           <a href="home.php"> <h1>Historiam Ludere</h1></a>
            <h2>Jouer avec l'histoire</h2>
            <img src="../public/assets/img/normandWhite.png" alt="LogoNormand"
            id="normandWhite">
        </div>
        <div class="menu">
            <ul>
                <li class="menu-item">Biographies</li>
                <li class="menu-item">Articles</li>
                <li class="menu-item">Podcast</li>
                <a href="about.php">
                    <li class="menu-item">A propos</li>
                </a>
                <a href="contact.php">
                    <li class="menu-item">Nous contacter</li>
                </a>    
            </ul>
        </div>          