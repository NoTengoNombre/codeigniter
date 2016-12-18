<?php

//Añade todo el contenido de la pagina
include "login.php";

if (!isset($_REQUEST["do"])) { // No esta definido : entra en el switch : Ejecuta el case "mostrarformulariologin"
  $accion = "mostrarformulariologin"; // Entra 1º vez aqui
} else {
  $accion = $_REQUEST["do"]; // Si esta definido : entra en el switch : ejecuta la $accion que venga desde el formulario 
}

switch ($accion) {
  case "mostrarformulariologin":
    $login = new Login(); // instancia un objeto
    $login->showForm(); // ejecuta el metodo asociado al objeto de la clase Login
    break;
  case "checklogin":
    $login = new Login(); // instancia un objeto
    $login->checkLogin(); // ejecuta el metodo asociado al objeto de la clase Login
    break;
  case "anadirpelicula":
    echo "Estoy en añadir pelicula";
//			$pelicula = new Pelicula(); //instanciamos un objeto Peliculas
//			$pelicula->addPelicula(); // añadimos objeto Peliculas - Esto es un metodo dentro de la clase Peliculas con un insert
//			break;
  case "updatepelicula":
    echo "Estoy en actualizar pelicula";
    echo "<meta http-equiv='refresh' content='2;URL=index.php' />";
    break;
  case "borrarpelicula":
    echo "Estoy en borrar pelicula";
    echo "<meta http-equiv='refresh' content='2;URL=index.php' />";
    break;
  default : "No hay nada seleccionado";
}
?>	