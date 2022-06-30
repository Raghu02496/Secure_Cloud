<?php
session_start();
require('connection.php');
include 'otpgeneration.php';

require('connection.php');
$username=stripslashes($_REQUEST['username']);
$username= mysqli_real_escape_string($con, $username);

$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con, $password);

$email    = stripslashes($_REQUEST['email']);
$email    = mysqli_real_escape_string($con, $email);

$create_datetime = date("Y-m-d H:i:s");

$_SESSION['username']=$username;
$_SESSION['password']=$password;
$_SESSION['email']=$email;
$_SESSION['datetime']=$create_datetime;
$_SESSION['otp']=$otp;


if(isset($_POST['submit'])){
   
            $to=$_POST['email'];
            $subject="Email Verification";
            $message="Your OTP Is ".$_SESSION['otp'];
            $from="From: projectyourpetcare@gmail.com \r\n";
            $headers="Content-Type: text/html; charset=UTF-8" . "\r\n";
            $headers="MIME-Version: 1.0" . "\r\n";
        
            mail($to,$subject,$message,$from);
}

header('location:EnterOTP.php');
?>