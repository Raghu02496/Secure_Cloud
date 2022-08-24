<?php
require("session.php");
if(!isset($_SESSION['tusername']) || !isset($_SESSION['temail']) || !isset($_SESSION['tpassword'])) {
       header("Location: index.html");
       exit();
   }

?>