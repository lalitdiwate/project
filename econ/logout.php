<?php 
session_start();
unset($_SESSION['PRN']);
unset($_SESSION['type']);
session_destroy();
header('Location:login.php');
?>