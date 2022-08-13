<?php
require("validsession.php");

if (!file_exists('\\\\DESKTOP\\uploaded_files\\'.$_SESSION['email'])) {
  mkdir('\\\\DESKTOP\\uploaded_files\\'.$_SESSION['email'], 0777, true);
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/succesfull.css" />
  <title>PHP File Upload</title>
</head>
<body>
  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      echo '<p class="notification">'.$_SESSION['message'].'</p>';
      unset($_SESSION['message']);
    }
  ?>
  <form method="POST" action="upload.php" enctype="multipart/form-data">
    <div class="upload-wrapper">
      <span class="file-name">Choose a file...</span>
      <!-- <label for="file-upload">Browse<input type="file" id="file-upload" name="uploadedFile"></label> -->
      <label for="file-upload">Browse<input type="file" id="file-upload" name="uploadedFile[]" multiple></label>
    </div>
 
    <input type="submit" name="uploadBtn" value="Upload" />
    
  </form>
  <form method="POST" action="download.php" enctype="multipart/form-data">
    <div class="upload-wrapper">
    <input type="submit" name="button" value="Download"/>
  </form>

  <br>
  <p><a href="logout.php">Logout</a></p>
</body>
</html> 
