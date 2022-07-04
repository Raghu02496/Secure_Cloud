<?php
require("session.php");
require('connection.php');

$email =$_POST['email']; 
$password =$_POST['pass'];  
  
    //to prevent from mysqli injection  
    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $email = mysqli_real_escape_string($con, $email);  
    $password = mysqli_real_escape_string($con, $password);
    
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
   
    header('location:loginvalidate.php');   
        
?>