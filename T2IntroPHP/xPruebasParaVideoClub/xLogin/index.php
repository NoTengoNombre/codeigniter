<!--
    @Created on : 20-oct-2016, 21:12:38
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : Crea una base de datos nueva llamada Videoclub en MySQL con la siguiente estructura:
                  
-->
<?php
//include './Usuarios.php';
//include './Actuan.php';
include './Peliculas.php';
//include './Personas.php';
include './login.php';

// Si no esta definida la respuesta desde el formulario 
if (!isset($_REQUEST["do"])) {
  $accion = "mostrarformulariologin"; // accion obtiene el nombre de mostrarformulariologin
  // Ejecuta los metodos asociados  
} else {
  $accion = $_REQUEST["do"];
}

switch ($accion) {
  case "mostrarformulariologin":
    $login = new Login();
    $login->showForm();
    break;
  case "checkLogin":
    $login = new Login();
    $login->checkLogin();
    break;
  case "aniadir_pelicula":
    echo "Estoy en añadir pelicula";
    $pelicula = new Peliculas();
    $pelicula->consultar_pelicula();
    break;
  default : "Salio del switch";
    break;
}
?>	