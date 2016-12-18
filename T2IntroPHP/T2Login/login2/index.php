<?php

include "login.php"; // Hago un include de la clase Login para traerme todos los metodos y datos

$login = new Login(); // Instanciamos un objeto de la clase Login

if (!isset($_REQUEST["usuario"])) { // Si no esta definida $_REQUEST muestra el formulario
  $login->showForm();
} else {
  $login->checkLogin();
}
?>	