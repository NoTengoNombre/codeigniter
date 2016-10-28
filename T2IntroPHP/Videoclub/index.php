<!--
    @Created on : 20-oct-2016, 21:12:38
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : Crea una base de datos nueva llamada Videoclub en MySQL con la siguiente estructura:
                  
-->
<?php
include './Peliculas.php';
include './Personas.php';
include './Usuarios.php';
include './Actuan.php';
include './login.php';
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
    echo "<strong>Estoy en consultar Peliculas</strong>";
    $pelicula = new Peliculas();
    $pelicula->crear_formulario_consultar();
    $pelicula->consultar_pelicula();
    break;
  case "aniadir_pelicula":
    echo "<strong>Estoy en aniadir Peliculas</strong>";
    $pelicula = new Peliculas();
    $pelicula->crear_formulario_aniadir();
    $pelicula->aniadir_pelicula();
    break;
  case "actualizar_pelicula":
    echo "<strong>Estoy en actualizar Peliculas</strong>";
    $pelicula = new Peliculas();
    $pelicula->crear_formulario_actualizar();
    $pelicula->actualizar_pelicula();
    break;
  case "borrar_pelicula":
    echo "<strong>Estoy en borrar Peliculas</strong>";
    $pelicula = new Peliculas();
    $pelicula->crear_formulario_borrar();
    $pelicula->borrar_pelicula();
    break;
  case "consultar_personas":
    echo "<strong>Estoy en consultar Personas</strong>";
    $personas = new Personas();
    $personas->crear_formulario_consultar_personas();
    $personas->consultar_personas();
    break;
  case "aniadir_personas":
    echo "<strong>Estoy en añadir Personas</strong>";
    $personas = new Personas();
    $personas->crear_formulario_insertar_personas();
    $personas->aniadir_personas();
    break;
  case "actualizar_personas":
    echo "<strong>Estoy en actualizar Personas</strong>";
    $personas = new Personas();
    $personas->crear_formulario_actualizar_personas();
    $personas->actualizar_personas();
    break;
  case "borrar_personas":
    echo "<strong>Estoy en borrar Personas</strong>";
    $personas = new Personas();
    $personas->crear_formulario_borrar_personas();
    $personas->borrar_personas();
    break;
  case "consultar_usuarios":
    echo "<strong>Estoy en buscar Usuarios</strong>";
    $us = new Usuarios();
    $us->crear_formulario_consultar_usuario();
    $us->consultar_usuarios();
    break;
  case "anadir_usuarios":
    echo "<strong>Estoy en buscar Usuarios</strong>";
    $us = new Usuarios();
    $us->crear_formulario_aniadir_usuario();
    $us->anadir_usuarios();
    break;
  case "actualizar_usuarios":
    echo "<strong>Estoy en buscar Usuarios</strong>";
    $us = new Usuarios();
    $us->crear_formulario_actualizar_usuario();
    $us->actualizar_usuarios();
    break;
  case "borrar_usuarios":
    echo "<strong>Estoy en buscar Usuarios</strong>";
    $us = new Usuarios();
    $us->crear_formulario_borrar_usuario();
    $us->borrar_usuarios();
    break;
  case "consultar_actuan":
    echo "<strong>Estoy en consultar Actuan</strong>";
    $actuan = new Actuan();
    $actuan->crear_formulario_consultar_usuario();
    $actuan->consultar_actuan();
    break;
  default :
    echo "ERROR : Accion No definida dentro del Switch";
    break;
} 