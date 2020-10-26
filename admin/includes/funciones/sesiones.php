<?php
function sesiones(){
  if (isset($_SESSION['usuario']) == false) {
    header('location: login.php');
  }
}
session_start();
sesiones();
?>
