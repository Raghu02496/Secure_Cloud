<?php
require("session.php");

if(isset($_POST['submit'])){

$_SESSION['email'] =$_POST['email']; 
$_SESSION['password']=$_POST['pass'];

if(isset($_SESSION['email'])&& isset($_SESSION['password'])){
header('location:loginvalidate.php');
}
}
?>
