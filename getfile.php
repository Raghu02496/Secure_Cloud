<?php
require("validsession.php");
  header('Content-Type: image/png');
  header("Content-type: application/pdf");
  readfile("\\\\DESKTOP\\uploaded_files\\".$_SESSION['email'].'\\'. $_GET['img']);
  // readfile("C:\Users\R\Pictures\Wallpapers\\". $_GET['img']);
?>
