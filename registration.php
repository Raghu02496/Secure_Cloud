<?php
require('session.php');
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/registration.css" />
</head>

<body>
    <form name="regform" class="form" action="registrationsession.php" onsubmit="return Validate()" method="post">
        <h1 class="login-title">Registration</h1>

        <input type="text" class="login-input" id="username" name="username" placeholder="Username" required />

        <input type="text" class="login-input" id="email" name="email" placeholder="Email Adress">

        <input type="password" class="login-input" id="password" name="password" placeholder="Password">

        <script type="text/javascript" src="javascript/formvalidationregistration.js"></script>

        <input type="submit" name="submit" value="Register" class="login-button">

        <p class="link"><a href="login.php">Click to Login</a></p>
        
    </form>
</body>

</html>