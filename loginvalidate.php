<?php
// require("validsession.php");
require("loginconnection.php");

$email=$_SESSION['email'];
$password=$_SESSION['password'];

//to prevent from mysqli injection  
$email = stripcslashes($email);  
$password = stripcslashes($password);  
$email = mysqli_real_escape_string($con, $email);  
$password = mysqli_real_escape_string($con, $password);

$sql =  "SELECT * FROM users WHERE email='$email' AND password='" . md5($password) . "'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  

if($count == 1){  

    // Redirect to user dashboard page
    header("Location: succesfull.php"); 
}  
else{ 
echo '<script language="javascript">';
echo 'alert("Inavlid UserName Or Password");';
echo 'window.location.href="index.html";';
echo '</script>';

    //echo "<h1> Login failed. Invalid username or password.</h1>";  
}        

?>