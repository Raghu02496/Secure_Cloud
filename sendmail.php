<?php
require("validsession.php");

 $to=$_SESSION['email'];
 $subject="Email Verification";
 $message="Your OTP Is ".$_SESSION['otp']."\n\nSimply Ignore This Mail If You Havenen't Signed Up For Our Page.";
 $from="From: projectyourpetcare@gmail.com \r\n";
 $headers="Content-Type: text/html; charset=UTF-8" . "\r\n";
 $headers="MIME-Version: 1.0" . "\r\n";
        
 mail($to,$subject,$message,$from);


header('location:EnterOTP.php');
?>