<?php
session_start();
require("connection.php");

$username=$_SESSION['username'];
$password=$_SESSION['password'];
$email=$_SESSION['email'];
$create_datetime=$_SESSION['datetime'];
$_SESSION['userotp']=$_POST['otpvalue'];

if($_SESSION['otp']==$_SESSION['userotp']){
    $query1 = "SELECT * FROM `users` WHERE email = '{$email}'";
    $result1 = mysqli_query($con,$query1);
    $count= mysqli_num_rows($result1);
    
    if($count==1){
         echo "<div class='form'>
         <h3>Account With This Email Already Exists</h3><br/>
         <p class='link'>Click here to <a href='registration.html'>register</a> again.</p>
         </div>";
     }
    
     elseif($count==0){
     $query2= "INSERT into `users` (username, password, email, create_datetime)
     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
     $result2= mysqli_query($con, $query2);
    
     echo "<div class='form'>
              <h3>You are registered successfully.</h3><br/>
               <p class='link'>Click here to <a href='login.html'>Login</a></p>
               </div>";
     }
    
     else {
         echo "<div class='form'>
              <h3>Required fields are missing.</h3><br/>
               <p class='link'>Click here to <a href='registration.html'>register</a> again.</p>
               </div>";
     }
}
  else{
    echo "Invalid OTP";
  }  
?>
