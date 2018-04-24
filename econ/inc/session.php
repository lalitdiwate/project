<?php
session_start();

if(empty($_SESSION['PRN']) || empty($_SESSION['type']) ){
  header('Location: login.php');
}

?>