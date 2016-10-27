<!--
    @Created on : 20-oct-2016, 21:12:38
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : Crea una base de datos nueva llamada Videoclub en MySQL con la siguiente estructura:
                  
-->
<?php
include '../T2PracticaFinal/Peliculas.php';
include "../T2PracticaFinal/login.php";

// Al comenzar no hay ningun valor definido por el formulario
// Ejecuta la '$accion' definida
if (!isset($_REQUEST["do"])) {
  $accion = "mostrarFormularioLogin";
} else {
  $accion = $_REQUEST["do"];
}

switch ($accion) {
  case "mostrarFormularioLogin":
    $login = new Login();
    $login->showForm();
    break;
  case "checklogin":
    $login = new Login();
    $login->checkLogin();
    break;
  case "consultar_pelicula":
    echo "<strong>Estoy en consultar peliculas</strong>";
    $pelicula = new Peliculas();
    $pelicula->crear_formulario();
    $pelicula->consultar_pelicula();
    break;
  case "aniadir_pelicula":
    echo "<strong>Estoy en aniadir peliculas</strong>";
    $pelicula = new Peliculas();
    $pelicula->aniadir_pelicula();
    break;
  case "actualizar_pelicula":
    echo "<strong>Estoy en actualizar peliculas</strong>";
    $pelicula = new Peliculas();
    $pelicula->actualizar_pelicula();
    break;
  case "borrar_pelicula":
    echo "<strong>Estoy en borrar peliculas</strong>";
    $pelicula = new Peliculas();
    $pelicula->borrar_pelicula();
    break;
}