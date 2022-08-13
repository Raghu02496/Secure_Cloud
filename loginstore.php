<?php
require("validsession.php");
require("connection.php");
     
    $email=$_SESSION['email']; 
    $password=$_SESSION['password'];
  
    //to prevent from mysqli injection  
    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $email = mysqli_real_escape_string($con, $email);  
    $password = mysqli_real_escape_string($con, $password);
   
    if(isset($_SESSION['email'])&& isset($_SESSION['password'])){
        header('location:loginvalidate.php');
    
    }

?>