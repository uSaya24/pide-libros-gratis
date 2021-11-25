<?php
session_start();
if (isset($_SESSION['Correo']) == "" || isset($_SESSION['Correo']) == null) {
    echo "<script>alert('Sesion caducada, inicie sesion');
    window.location.href='./index.php'</script>";
}


  include_once ('includes/headerusu.php'); ?>