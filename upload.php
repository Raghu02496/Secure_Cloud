<?php
 require("succesfull.php");
 require("validsession.php");
 $message = ''; 

// Check if form was submitted
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {
 
    // Configure upload directory and allowed file types
    
    // $upload_dir = "\\\\192.168.1.2\\uploaded_files\\ ";
    // $upload_dir = "C:\Folder\uploaded_files\ ";
    
    $upload_dir = "\\\\DESKTOP-TPUIMSV\\uploaded_files\\".$_SESSION['email'].'\\';
    $allowed_types = array('jpg', 'png', 'jpeg', 'gif','pdf','mp4');
     
    // Define maxsize for files i.e 2MB
    $maxsize = 2 * 1024 * 1024;
 
    // Checks if user sent an empty form
    if(!empty(array_filter($_FILES['uploadedFile']['name']))) {
 
        // Loop through each file in files[] array
        foreach ($_FILES['uploadedFile']['tmp_name'] as $key => $value) {
             
            $file_tmpname = $_FILES['uploadedFile']['tmp_name'][$key];
            $file_name = $_FILES['uploadedFile']['name'][$key];
            $file_size = $_FILES['uploadedFile']['size'][$key];
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
 
            // Set upload file path
            $filepath = $upload_dir.$file_name;
 
            // Check file type is allowed or not
            if(in_array(strtolower($file_ext), $allowed_types)) {
 
                // Verify file size - 2MB max
                if ($file_size > $maxsize)        
                    echo "Error: File size is larger than the allowed limit.";
 
                // If file with name already exist then append time in
                // front of name of the file to avoid overwriting of file
                if(file_exists($filepath)) {
                    $filepath = $upload_dir.time().$file_name;
                     
                    if( move_uploaded_file($file_tmpname, $filepath)) {
                        echo "{$file_name} successfully uploaded <br />";
                    }
                    else {                    
                        echo "Error uploading {$file_name} <br />";
                    }
                }
                else {
                 
                    if( move_uploaded_file($file_tmpname, $filepath)) {
                        $message ='File is successfully uploaded.';
                    }
                    else {   
                        $message = 'There was some error moving the file'. $file_name .'Please make sure the upload directory is writable by web server.';                 
                        //echo "Error uploading {$file_name} <br />";
                    }
                }
            }
            else {
                 
                // If file extension not valid
                //$message= 'Error uploading'. $file_name;
                $message = $file_ext .'file type is not allowed';
            }
        }
    }
    else {
         
        // If no files selected
        $message = 'No files selected.';
    }
}
$_SESSION['message'] = $message;
header("Location: succesfull.php");

?>