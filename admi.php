<?php
session_start();
if (isset($_SESSION['usuario']) == "" || isset($_SESSION['usuario']) == null) {
    echo "<script>alert('No tienes permiso para acceder.');
    window.location.href='./index.php'</script>";
}
include_once ('includes/headeradmi.php'); 
?>