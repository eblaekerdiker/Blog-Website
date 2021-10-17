<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['author'])){
header("Location: http://localhost/seproject/insert_author.php");
}
  $db=mysqli_connect("localhost", "root", "", "seproject") or die ("not connected");
  $email=mysqli_real_escape_string($db, $_POST['email']);
  $name=mysqli_real_escape_string($db, $_POST['name']);
  $password=mysqli_real_escape_string($db, $_POST['password']);
  $password=hash('sha512', $password);
  $query = "INSERT INTO author (name, email, password) VALUES ('$name', '$email', '$password')";
  $result = mysqli_query($db, $query);
 
     //header("Location:http://localhost/yaz%c4%b1l%c4%b1m%20m%c3%bchendisli%c4%9fi%20proje/insert_post.php");
  
?>