<?php
require("session.php");

if(isset($_POST['submit'])){

$_SESSION['tusername'] =$_POST['username'];
$_SESSION['temail'] =$_POST['email']; 
$_SESSION['tpassword']=$_POST['password'];

if(isset($_SESSION['temail'])&& isset($_SESSION['tpassword'])){
header('location:regstore.php');
}
}
?>