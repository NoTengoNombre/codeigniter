<!--
    @Created on : 20-oct-2016, 21:12:38
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
include './peliculas.php';
include './personas.php';
include './actuan.php';
include './usuarios.php';

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