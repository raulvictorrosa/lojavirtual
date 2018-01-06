<?php
session_start();
if($_SESSION['login']!="TRUE"){
  header("Location:../model/login.php");
}
?>