<?php
require("session.php");

if(isset($_POST['submit'])){

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "login_database";  
      
$con = mysqli_connect($host, $user, $password, $db_name); 
 
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }     

$_SESSION['tusername'] =$_POST['username'];
$_SESSION['temail'] =$_POST['email']; 
$_SESSION['tpassword']=$_POST['password'];

$email = stripslashes($_SESSION['temail']);
$email = mysqli_real_escape_string($con, $email);

$query1 = "SELECT * FROM `users` WHERE email = '{$email}'";
    $result1 = mysqli_query($con,$query1);
    $count= mysqli_num_rows($result1);
    
    if($count==1){
      echo '<script language="javascript">';
      echo 'alert("Account With This Email Already Exists");';
      echo 'window.location.href="regorlog.html";';
      echo '</script>';
     }

elseif(isset($_SESSION['temail'])&& isset($_SESSION['tpassword'])){
header('location:regstore.php');
}
}
else{
  header('location:regorlog.html'); 
}
?>




        