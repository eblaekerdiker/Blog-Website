<?php
error_reporting(0);
session_start();
  $db=mysqli_connect("localhost", "root", "", "seproject") or die ("not connected");
  $email=mysqli_real_escape_string($db, $_POST['email']);
  $password=mysqli_real_escape_string($db, $_POST['password']);
  $password=hash('sha512', $password);
  $query = "SELECT id FROM author WHERE email = '$email' AND password= '$password'";
  $result = mysqli_query($db, $query);
  if(mysqli_num_rows($result) == 1){
     $_SESSION['author'] = mysqli_fetch_array($result)[0];
     header("Location: http://localhost/seproject/insert_post.php");
     
  }else{
      header("Location: http://localhost/seproject/login.php?error=1");
  }
?>