<?php
require("validsession.php");
  header('Content-Type: image/png');
  header("Content-type: application/pdf");
  readfile("\\\\DESKTOP-TPUIMSV\\uploaded_files\\".$_SESSION['email'].'\\'. $_GET['img']);
?>