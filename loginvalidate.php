<?php
require("validsession.php");
require("connection.php");

$email=$_SESSION['email'];
$password=$_SESSION['password'];

$sql =  "SELECT * FROM users WHERE email='$email' AND password='" . md5($password) . "'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  

if($count == 1){  

    // Redirect to user dashboard page
    header("Location: succesfull.php"); 
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}        

?>