<?php
require("session.php");
 if(!isset($_SESSION['email'])) {
        header("Location: index.php");
        exit();
    }
?>