
<?php

session_start();

$firstname = $_SESSION["firstname"];
$lastname = $_SESSION["lastname"];

if (!isset($_SESSION["logged_in"])) {
    header("Location: ../../index.php");
    exit;
}
?>


<html>
    <head>
        <link rel="stylesheet" href="../../css/myCSS.css">

        <style>
            body {
                background-image: url("../../Background.jpg");
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

            
            <div class="introduction">
                <div class="welcome-text">
                    Hello <?php echo $firstname . " " . $lastname?>! Welcome to my website! 
            </div>
            <form action="../../pain/logout.php" id="logout">
                <div class="logout-extraspace">
                    <div class="logout">
                        <input type="button" value="Logout" onclick="logout()">
                    </div>
            </div>
            </form>
            </div>
            <div class="menu-buttons-container">
                <a href="../HomePage.php">
                <div class="menu-buttons">Home Page</div><br>
                </a>
                <a href="../CV/myCV.php">
                <div class="menu-buttons">CV</div><br>
                </a>
                <div class="menu-current-button">Gallery</div>
                <a href="../Contacts.php">
                <div class="menu-buttons">Contact Me</div>
                </a>
            </div>

        </div>
            <div class="body-text" style="padding-top:20px;">
            Constructed a minature database for a Library chain with 
            a group of 2 peers. For the project, we constructed a system 
            with dozens of entities and relations within an SQL IDE, 
            alongside a sufficient amount of advanced queries for retrieving 
            information from within the database. After consturction, we 
            proceeded to test the database by generating hundreds of fake 
            people and equipment to populate the system. <br><br>
             </div>
             <div style="padding-left:335px;">

            <?php 
            $imagesfile = "Images.csv";
            $Images = array_map('str_getcsv', file($imagesfile));
            foreach ($Images as $row) {
                echo '<a href="images/' . $row[0] . '" target="_blank">';
                echo '<img src="images/' . $row[0] . '" class="images-gallery">';
                echo '</a>';
            }
            ?>

            </div>
        </div>

            <a href="../Contacts.php">
            <div class="contacts">+71 851 420 | GhazarianAri04@Gmail.com</div>
            </a>
            
        </div>

        <script>
            function logout(){
                    document.getElementById("logout").submit();
            }
        </script>


    </body>
</html>