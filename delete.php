<?php
include 'connect.php' ;

 $id = $_GET["id"];

 $sql = "DELETE FROM users WHERE id = $id";
 $result = mysqli_query($conn, $sql);


 if($result == TRUE){
    header('location:/php_test_app/index.php');
 }


?>