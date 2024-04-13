
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