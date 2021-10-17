<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <img class="wave" src="img/wave.png">
        <div class="container">
            <div class="img">
                <img src="img/unlock.svg">
            </div>
            <div class="login-container">
                <form action="loginn.php" method="POST">
                    <img class="avatar" src="img/avatar.svg">
                    <h2>Welcome</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h5 style="position: relative; height: 45px">Email</h5>
                            <input name="email" class="input" type="text">
                        </div>
                    </div>
                    <div class="input-div two">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div>
                            <h5>Password</h5>
                            <input name="password" class="input" type="password">
                        </div>
                    </div>
                    <a href="#">Forgot Password?</a>
                    <input name="submitlogin" type="submit" class="btn" value="Login">
                </form>
            </div>
        </div>
    </body>
</html>