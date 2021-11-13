<?php
session_start();
$_SESSION['email']="";
session_unset();
session_destroy();
header('location:../index.php?page=home');
?>

