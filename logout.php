<?php
session_start(); 
$_SESSION['uname'] = ''; 
unset($_SESSION['uname']); 
session_destroy(); 
header('location:home.php'); 
?>