<?php

// guardar_variable.php
session_start(); // inicio de sessiones
// necesario cada vez que se lea 
// o guarden variables de sesion
$_SESSION['variable'] = valor;
?>

