<?php

?>
<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="css/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body onload="document.getElementById('id01').style.display='block'" style="width:auto;">



    <div id="id01" class="modal">
        <form class="modal-content animate" name="f1" action="loginsession.php" onsubmit="return Validate()" method="post">
           
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img src="media_files/Smudge_Avatar.jpg" alt="media_files/img_avatar2.png" class="avatar">
            </div>

            <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" id="email" required>
                

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" id="pass" required>

                <script type="text/javascript" src="javascript/formvalidationlogin.js"></script>

                <input type="submit" name="submit" id="btn" value="Login" />
                
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>

                <p class="link"><a href="registration.php">New Registration</a></p>

            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                    class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
    <script src="javascript/outsideclick.js"></script>
</body>

</html>
