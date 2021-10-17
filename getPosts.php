<?php
error_reporting(0);   
function getMainPosts(){
    $db=mysqli_connect("localhost", "root", "", "seproject") or die ("not connected");
    $query = "SELECT * FROM post";
    $result=mysqli_query($db, $query);
     while($row = mysqli_fetch_array($result)){
        echo '<input type="text" name="id" value='.$row['id'].'><br/>';    
     }
}

?>