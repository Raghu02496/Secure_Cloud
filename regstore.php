<?php
require("connection.php");
require("otpgeneration.php");
require("validsession.php");

$username=stripslashes($_SESSION['username']);
$username= mysqli_real_escape_string($con, $username);

$password = stripslashes($_SESSION['password']);
$password = mysqli_real_escape_string($con, $password);

$email = stripslashes($_SESSION['email']);
$email = mysqli_real_escape_string($con, $email);

$create_datetime = date("Y-m-d H:i:s");

$_SESSION['datetime']=$create_datetime;
$_SESSION['otp']=$otp;

header('location:sendmail.php');
?>