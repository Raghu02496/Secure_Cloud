<?php
require("validsession.php");

if (!file_exists('\\\\DESKTOP-TPUIMSV\\uploaded_files\\'.$_SESSION['email'])) {
  mkdir('\\\\DESKTOP-TPUIMSV\\uploaded_files\\'.$_SESSION['email'], 0777, true);
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles/succesfull.css" />
  <title>PHP File Upload</title>
</head>
<body>

  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      echo '<p class="notification">'.$_SESSION['message'].'</p>';
      unset($_SESSION['message']);
    }
    // elseif (isset($_SESSION['message1'])){
    //   echo '<script language="javascript">';
    //   echo 'alert("File Uploaded Succesfully");';
    //   echo '</script>';
    // }
    
   ?>
   
  <form method="POST" action="upload.php" enctype="multipart/form-data">
  <div class="frame">
    <div class="center">
      <div class="title">
        <h1>Drop file to upload</h1>
      </div>
  
      <div class="dropzone">
        <img src="images/upload.svg" class="upload-icon" />
        <input type="file" id="file-upload" class="upload-input" name="uploadedFile[]" multiple/>
      </div>
  
      <input type="submit" class="btn" name="uploadBtn" value="Upload" />
      
  
    </div>
  </div>
  </form>
  <form method="POST" action="download.php" enctype="">
    <div class="">
    <input type="submit" name="button" value="Download"/>
  </form>

  <br>
  <p><a href="logout.php">Logout</a></p>
</body>
</html> 