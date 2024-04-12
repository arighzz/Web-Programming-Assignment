<?php

    if(isset($_GET['error'])) {
       if($_GET['error'] === 'wrong_password') {
        echo "<script>alert('Wrong password.');</script>";
       }
       elseif($_GET['error'] === 'user_doesnt_exist') {
        echo "<script>alert('User doesn\'t exist');</script>";
       }
    }


?>

<html>

<head>
    <link rel="stylesheet" href="CSS/myCSS.css">
        <title>
            login
        </title>
        <style>
              body {
                background-image: url("Background.jpg");
                background-size: cover;
                background-attachment: fixed;
                margin: 0;
                padding: 0;
            }
        </style>

</head>
<body>


<center>
<div class="paragraph">
            <form action="pain/login.php" method="POST" id="login-form">
                <div  class="form-element">
                    <div class="form-sub-element">
                        <label for="un">User Name</label>
                    </div>
                <input type="text" name="username" id="un">
                </div>

                <div class="form-element">
                    <div class="form-sub-element">   
                      <label for="pass">Password</label>
                    </div>
                <input type="password" name="password" id="pass">
              </div>

                <input type="button" value="Login" onclick="login()">
                <input type="button" value="Cancel" onclick="ClearForm()">
            </form>

            <div class="signup">
            <a href="pages/signup.html">Sign Up...</a>
        </div>
        </div>
    
        </center>


        <script>
            function login(){
                var un=document.getElementById("un").value;
                var pass=document.getElementById("pass").value;
                if ((un=="")||(pass=="")){
                    alert("You must fill in the username and the password!");
                }else{
                    document.getElementById("login-form").submit();
                }

            }
            function ClearForm(){
                document.getElementById("un").value="";
                document.getElementById("pass").value="";
            }
    </script>

</body>


</html>
