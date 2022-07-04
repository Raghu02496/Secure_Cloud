<?php
require("validsession.php");
header("Refresh:30; url=registration.php");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="registration.css" />
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
</head>

<body>
    <form name="otpform" action="ValidateOTP.php" class="form" method="post">
        <h1 class="login-title">Registration</h1>

        <input type="password" class="login-input" id="otpvalue" name="otpvalue" placeholder="OTP" required />

        <input type="submit" name="submit" value="Submit" class="login-button">

        <!-- <button class = "" type ="button" >Resend OTP</button> -->

    </form>

</body>

</html>

