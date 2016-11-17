<?php

include_once ("vista.php");
include_once ("login.php");
include_once ("seguridad.php");

class Controlador {

  public static function control() {

    session_start();

    if (!isset($_REQUEST["do"])) {
      $accion = "mostrarformulariologin";
    } else {
      $accion = $_REQUEST["do"];
      switch ($accion) {

        // ******************** LOGIN *************************

        case "mostrarformulariologin":
          Vista::show("login/formLogin");
          break;

        case "checklogin":
          $loginOk = Login::checkLogin();
          if ($loginOk) {
            if (Seguridad::getTipoUsuario() == "admin") {
              Vista::show("menu/menuAdmin");
            } else {
              Vista::show("menu/menuUser");
            }
          } else {
            Vista::show("login/errorLogin");
          }
          break;

        case "cerrarsesion":
          Seguridad::cerrarSesion();
          echo "La sesión se ha cerrado correctamente<br/>";
          echo "<a href='index.php'>Volver al inicio</a>";
          break;
        // ******************** MENÚS *************************
        case "showmenuadmin":
          if (Seguridad::getTipoUsuario() == "admin") {
            Vista::show("menu/menuAdmin");
          } else {
            Vista::show("login/formLogin");
          }
          break;
        case "showmenuuser":
          if (Seguridad::getTipoUsuario() == "user") {
            Vista::show("menu/menuUser");
          } else {
            Vista::show("login/formLogin");
          }
          break;
        // ******************** PELÍCULAS *************************
        case "formanadirpelicula":
          if (Seguridad::getTipoUsuario() == "admin") {
            Vista::show("peliculas/formAddpelicula");
          } else {
            Vista::show("login/formLogin");
          }
          break;
        case "addPelicula":
          if (Seguridad::getTipoUsuario() == "admin") {
            
          } else {
            Vista::show("login/formLogin");
          }
          break;
//        ...etc...
      }
    }
  }

}
