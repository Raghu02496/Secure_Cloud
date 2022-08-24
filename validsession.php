<?php
require("session.php");
if(!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
       header("Location: index.html");
       exit();
   }

?>