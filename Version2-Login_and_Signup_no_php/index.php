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

</body>


</html>
