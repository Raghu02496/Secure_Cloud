<?php
require("registerconnection.php");

if(isset($_POST['submit'])){

$username=stripslashes($_SESSION['tusername']);
$username= mysqli_real_escape_string($con, $username);

$password = stripslashes($_SESSION['tpassword']);
$password = mysqli_real_escape_string($con, $password);

$email = stripslashes($_SESSION['temail']);
$email = mysqli_real_escape_string($con, $email);

$create_datetime = date("Y-m-d H:i:s");

$_SESSION['userotp']=$_POST['otpvalue'];

if($_SESSION['otp']==$_SESSION['userotp']){
    $query1 = "SELECT * FROM `users` WHERE email = '{$email}'";
    $result1 = mysqli_query($con,$query1);
    $count= mysqli_num_rows($result1);
    
    if($count==1){
      echo '<script language="javascript">';
      echo 'alert("Account With This Email Already Exists");';
      echo 'window.location.href="index.html";';
      echo '</script>';
     }
    
     elseif($count==0){
      
     $query2= "INSERT into `users` (username, password, email, create_datetime)
     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
     $result2= mysqli_query($con, $query2);

     $_SESSION['email']=$_SESSION['temail'];
     $_SESSION['password']=$_SESSION['tpassword'];

      echo '<script language="javascript">';
      echo 'alert("You Are Registered Succesfully");';
      echo 'window.location.href="succesfull.php";';
      echo '</script>';
     }
    
}
  elseif($_SESSION['otp']!=$_SESSION['userotp']){
      echo '<script language="javascript">';
      echo 'alert("Invalid OTP");';
      echo 'window.location.href="enterotp.php";';
      echo '</script>';
  }  
}
else{
    header("Location: regorlog.html"); 
}
?>
