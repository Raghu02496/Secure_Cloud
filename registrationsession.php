<?php
require("session.php");

if(isset($_POST['submit'])){

$_SESSION['username'] =$_POST['username'];
$_SESSION['email'] =$_POST['email']; 
$_SESSION['password']=$_POST['password'];

if(isset($_SESSION['email'])&& isset($_SESSION['password'])){
header('location:regstore.php');
}
}
?>