<?php
require("otpgeneration.php");
require("validregsession.php");

$_SESSION['otp']=$otp;

header('location:sendmail.php');
?>