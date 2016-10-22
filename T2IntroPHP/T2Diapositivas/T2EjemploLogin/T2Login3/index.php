<!--
    @Created on : 20-oct-2016, 23:06:58
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
include_once 'login.php';

if (!isset(filter_input(INPUT_GET, 'do'))) {
  $accion = "mostrarformulariologin";
} else {
  $accion = filter_input(INPUT_GET, 'do');

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
      echo "Estoy en añadir peliculas";
      $pelicula = new Pelicula();
      $pelicula->addPelicula();
      break;
  }
}
?>
