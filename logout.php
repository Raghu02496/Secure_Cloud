<?php
   require("session.php");

    // Destroy session

    if(session_destroy()){
        // Redirecting To Home Page
        header("Location: index.html");
    }
?>
