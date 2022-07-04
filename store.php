<?php
require("session.php");
require("connection.php");
include 'otpgeneration.php';

if(isset($_POST['submit'])){

$username=stripslashes($_REQUEST['username']);
$username= mysqli_real_escape_string($con, $username);

$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con, $password);

$email = stripslashes($_REQUEST['email']);
$email = mysqli_real_escape_string($con, $email);

$create_datetime = date("Y-m-d H:i:s");

$_SESSION['username']=$username;
$_SESSION['password']=$password;
$_SESSION['email']=$email;
$_SESSION['datetime']=$create_datetime;
$_SESSION['otp']=$otp;
}
header('location:sendmail.php');
?>