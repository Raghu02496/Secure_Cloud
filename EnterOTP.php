<?php

require("connection.php");

session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>OTP</title>
    <link rel="stylesheet" href="registration.css" />
</head>

<body>
    <form name="thankform" action="ValidateOTP.php" class="form" method="post">
        <h1 class="login-title">Registration</h1>

        <input type="password" class="login-input" id="otpvalue" name="otpvalue" placeholder="OTP" required />

        <input type="submit" name="submit" value="Submit" class="login-button">

    </form>
</body>

</html>

<!-- <p class="w3-center"><button class="w3-btn w3-green w3-round" style="width:100%;height:40px" name="resend">Resend</button></p> -->