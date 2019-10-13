<?php 
session_start(); 
if($_SESSION['acceso']!='ok'){ 
header('location: login.php'); 
} 
?>
