<html>
    <head>
        <title>Insert Post</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style1.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <img class="air" src="img/air.png">
        <div class="box">
            <div class="box-post">
                <form action="insert_postt.php" method="POST">
                    <input name="author" type="hidden" value="<?php echo $_SESSION['author']?>">
                    <div align="center">
                    <img class="avatar" src="img/writter.svg">
                    </div>
                    <h2>Insert Post</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-title"></i>
                        </div>
                        <div>
                            <h5>Title</h5>
                            <input name="title" class="input" type="text">
                        </div>
                    </div>
                    <div class="input-div two">
                        <div class="i">
                            <i class="fas fa-seotitle"></i>
                        </div>
                        <div>
                            <h5>Seo Title</h5>
                            <input name="seo_title" class="input" type="text">
                        </div>
                    </div>
                    <div class="input-div three">
                        <div class="i">
                            <i class="fas fa-category"></i>
                        </div>
                        <div>
                            <h5>Category</h5>
                            <input name="category" class="input" type="text">
                        </div>
                    </div>
                    <div class="input-div four">
                        <div class="i">
                            <i class="fas fa-content"></i>
                        </div>
                        <div>
                            <h5>Content</h5>
                            <textarea name="content" class="input"></textarea>
                        </div>
                    </div>                    
                    <input name="insertsubmit" type="submit" class="btn" value="Insert">
                </form>
            </div>
        </div>
    </body>
</html>