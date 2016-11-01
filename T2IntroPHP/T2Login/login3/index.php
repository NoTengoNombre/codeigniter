<?php

include ("login.php");

if (!isset($_REQUEST["do"]))
  $accion = "mostrarformulariologin";
else
  $accion = $_REQUEST["do"];

switch ($accion) {
  case "mostrarformulariologin":
    $login = new Login();
    $login->showForm();
    break;
  case "checklogin":
    $login = new Login();
    $login->checkLogin();
    break;
  case "anadirpelicula":
    echo "Estoy en añadir pelicula";
//			$pelicula = new Pelicula();
//			$pelicula->addPelicula();
//			break;
}
?>	