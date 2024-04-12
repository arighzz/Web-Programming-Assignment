
<?php

session_start();


if (!isset($_SESSION["logged_in"])) {
    header("Location: ../../index.php");
    exit;
}
?>



<html>

<head>
    <link rel="stylesheet" href="myCSS.css">
    <title>Web CV</title>
    <style>
          a {
         text-decoration: none; 
         color: inherit; 
            }


        body {
            background-color:#B4BFC1;
        }
    </style>

</head>


<body>

   

    <center>
        <img src="Images/NameCard.png" class="namecard">
        <div class="whitepage"></div> 
        <div class="nametext">
             Ari Ghazarian
        </div>
        <div class="positiontext">Junior Developer</div>

    </center>
 
    <div class="infobox"></div>
    <div class="linkbox"></div>
    <div class="infotext">Contacts</div>
    <div class="info" style="font-size:12px">ghazarianri04@gmail.com</div>
    <div class="info" style="font-size:14px; top: 235">+71 851 420</div>
    <div class="info" style="font-size:14px; top:255;">Naqqache, Beit al<br>Moustakbal</div>
    <div class="infotext" style="top:295;">Languages</div>
    <div class="info" style="font-size:16;top:335;left:335;">English: 100%</div>
    <div class="info" style="font-size:16;top:360;left:335;">Armenian: 100%</div>
    <div class="info" style="font-size:16;top:385;left:335;">Arabic: 80%</div>
    <div class="info" style="font-size:16;top:410;left:335;">French: 20%</div>
    <div class="linktext">
        <ul>
            <a href="../Homepage.php">
            <li> Home </li> 
            </a>
            <a href="../Gallery/Gallery.php">
            <li> Projects </li> 
            </a>
            <a href="../Contacts.php">
            <li> Contacts </li>
            </a>
        </ul>

    </div>
    <div class="titleheader" style="top:180;right: 360px;">Pages</div>
    <div class="titleheader" style="top:180; left:480">Education:</div>
    <div class="descriptor" style="top:230px">
        Bachelors of Science in Bioinformatics <br>
        at Lebanese American University<br> Beirut, Lebanon <br>
        Year of Graduation: 2024
    </div>
    <div class="titleheader" style="top:340; left:480">Skills:</div>
    <div class="descriptor" style="top:370px">
        <ul>
            <li> Coding in Python, Javascript, Java, R, and C++.</li>
            <li> Using R and Python data mining tools to parse<br> through data.</li>
            <li> Manipulation and maintenance of databases<br> using SQL.</li>
        </ul>
    </div>
    <div class="titleheader" style="top:500; left:480">Experience:</div>
    <div class="descriptor" style="top:550;font-size:17px"> Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
         Maxime mollitia, molestiae quas vel sint commodi repudiandae <br>
         consequuntur voluptatum laborum numquam blanditiis harum<br>
          quisquam eius sed odit fugiat iusto fuga praesentium optio,<br>
           eaque rerum! Provident similique accusantium nemo autem.</div>
</body>







</html>