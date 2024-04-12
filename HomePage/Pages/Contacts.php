
<?php

session_start();


if (!isset($_SESSION["logged_in"])) {
    header("Location: ../index.php");
    exit;
}
?>


<html>
    <head>
        <link rel="stylesheet" href="../css/myCSS.css">

        <style>
            body {
                background-image: url("../Background.jpg");
                background-size: cover;
                background-position: 300px 0; 
                background-attachment: fixed;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>

    <body>

        <div class="blackbar">

            
            <div class="introduction">Hello! My name is<br> Ari Ghazarian!</div>
            <div class="menu-buttons-container">
                <a href="HomePage.php">
                <div class="menu-buttons">Home Page</div><br>
                </a>
                <a href="CV/myCV.php">
                <div class="menu-buttons">CV</div><br>
                </a>
                <a href="Gallery/Gallery.php">
                <div class="menu-buttons">Gallery</div>
                </a>
                <div class="menu-current-button">Contact Me</div>
            </div>

        </div>

            <div class="title-text">Phone Number</div>
            <div class="body-text">
                Personal Number: +71 851 420 <br>
                Home Line: +04 521 147
            </div>
            <div class="title-text">Email Address</div>
            <div class="body-text">
                Personal Email: GhazarianAri04@Gmail.com<br>
                University Email: ari.ghazarian@lau.edu
            </div>
            <div class="title-text">Address:</div>
            <div class="body-text">
                Naqqache, Lebanon, <br>
                Beit Al Moustakbal, <br>
                Evangela Building.
            </div>

    </body>
</html>