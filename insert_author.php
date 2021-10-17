<!DOCTYPE html>
<html>
    <head>
        <title>Insert Author</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <img class="wave" src="img/wave1.png">
        <div class="box">
            <div class="img">
                <img src="img/add_user.svg">
            </div>
            <div class="box-author">
                <form action="insert_authorr.php" method="POST">
                    <img class="avatar" src="img/a.svg">
                    <h2>Add Author</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-name"></i>
                        </div>
                        <div>
                            <h5>Name</h5>
                            <input name="name" class="input" type="text">
                        </div>
                    </div>
                    <div class="input-div two">
                        <div class="i">
                            <i class="fas fa-mail"></i>
                        </div>
                        <div>
                            <h5>Mail</h5>
                            <input name="email" class="input" type="text">
                        </div>
                    </div>
                    <div class="input-div three">
                        <div class="i">
                            <i class="fas fa-password"></i>
                        </div>
                        <div>
                            <h5>Password</h5>
                            <input name="password" class="input" type="password">
                        </div>
                    </div>
                    <input name="submitauthor" type="submit" class="btn" value="Insert">
                </form>
            </div>
        </div>        
    </body>
</html>