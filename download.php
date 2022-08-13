<?php
require("validsession.php");
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="index.css" />
	<title>MyCloud</title>
</head>

<body>
    <form name="" class="" action="downloadlogic.php" onsubmit="" method="get">
<?php
    // $path = 'C:\Folder\\';
    $path    = "\\\\DESKTOP\\uploaded_files\\".$_SESSION['email'].'\\';
    $files = scandir($path);
    $files = array_diff(scandir($path), array('.', '..'));
    foreach($files as $file){
      $absolutelink=$path.$file;
      $file_ext = pathinfo($absolutelink, PATHINFO_EXTENSION);
      if ($file_ext=="pdf") {
        
        echo "<img src='media_files/pdf.png' width='128' height='128'/><br>"."<a href='getfile.php?img=".$file."'target='_blank'>$file</a><br>";
        }   
         else{
       echo "<img src='getfile.php?img={$file}' width='128' height='128'/><br>"."<a href='downloadlogic.php?path=".$absolutelink."'>$file</a><br>";
      
      // echo "<a href='downloadlogic.php?path=".$absolutelink."'><img src='getfile.php?img={$file}' width='128' height='128'/></a>";
         }
    }
    ?>
</form>
</body>
</html>
