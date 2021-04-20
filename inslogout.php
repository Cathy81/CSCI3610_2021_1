<?php
session_start();
if(isset($_SESSION['medicaluser']))
{
  $_SESSION=array();
  setcookie(session_name(), "", time()-2592000, '/');
  session_destroy();
  header("Location:/project2/inslogin.php");
}
?>