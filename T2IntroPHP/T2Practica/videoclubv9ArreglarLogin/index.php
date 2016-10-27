<!--
    @Created on : 20-oct-2016, 21:12:38
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       : Crea una base de datos nueva llamada Videoclub en MySQL con la siguiente estructura:
                  
-->
<?php
include './';
include "./login.php";

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
  case "aniadir_pelicula":
    echo "Estoy en añadir pelicula";
    $pelicula = new Pelicula();
    break;
}