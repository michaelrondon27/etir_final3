<?php 
 //Crear sesión
 session_start();
 //Vaciar sesión
 $_SESSION = array();
 //Destruir Sesión
 session_destroy();
 //var_dump($_SESSION);
 //Redireccionar a login.php
 header("location:./index.php");
?>