<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Italianno' rel='stylesheet'>
        <link href='css.css' rel='stylesheet'>
    </head>

    <body>
        <header>
            <div class="container-fluid"style ="background-color: black;">
                <div class="row align-items-start">

                    <div class="col-4"></div>

                    <div class="col-4">
                            <h1 style = "color: white; text-align: center; font-family: italianno; font-size: 45px;">
                                <a href="main.php" style="color: white;">La Fleur</a>
                            </h1>
                    </div>

                    <div class="col-4" style="text-align: right;" >
                        <!-- Changer les redirections : -->
                        <?php 
                        
                        session_start();

                        if (isset($_SESSION['login'])){
                            echo '
                            <a href="deco.php"><img src="header/images/deco.png"  height="50" width="50"></a>';
                        }
                        
                        ?>
                        <a href="<?php

                        if (isset($_SESSION['login'])){
                            echo 'infosPerso.php';
                        } else {
                            echo 'Authentification.php';
                        }
                        
                        ?>"><img src="header/images/util.PNG"  height="50" width="50"></a>
                        <a href="afficher_panier.php"><img src="header/images/shop.PNG" height="45" width="45" class="rounded float-end"></a>
                    </div>

                </div>
                
            </div>
        </header>