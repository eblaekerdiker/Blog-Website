<?php
session_start();
if(!isset($_SESSION['author'])){
    header("Location: http://localhost/seproject/insert_author.php");
}
    error_reporting(0); 
    $title = $_POST['title'];
    $seo_title = $_POST['seo_title'];
    $content = $_POST['content'];
    $category = $_POST['category']; //example 1 2 4
    $author =$_POST['author'];
    $insertsubmit=$_POST['insertsubmit'];

    $db=mysqli_connect("localhost", "root", "", "seproject") or die ("not connected");
    $sql = "INSERT INTO post (title, seo_title, content, author)
    VALUES ('$title','$seo_title','$content','$author')";
    $query=mysqli_query($db,$sql);
    if($query){
        echo "successfull";
    }

    $query= "SELECT id FROM post WHERE seo_title='$seo_title'";
    $result=mysqli_query($db,$query);

    $row=mysqli_fetch_array($result);
    echo "ID is ". $row[0];

    $post_id= $row[0];
    $category_array=explode(" ", $category); //[1, 2, 3]

    foreach($category_array as $el){
        $query="INSERT INTO has_category (post, category) VALUES ($post_id, $el)";
        mysqli_query($db,$query);
    }

    header('Location: http://localhost/seproject/insert_post.php');
?>