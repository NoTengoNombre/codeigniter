<?php

include_once ("vista.php");
include_once ("login.php");
include_once ("seguridad.php");

class Controlador {

  /**
   * Mostrar formulario login
   */
  public static function control() {
    if (!isset($_REQUEST["do"])) { // si no esta fijado 'do' = accion
      $accion = "mostrarformulariologin"; // muestra el formulario login
    } else {
      $accion = $_REQUEST["do"]; // sino : esta fijado : realizar 'do' = accion
    }

    switch ($accion) {
      // ******************** LOGIN *************************
      case "mostrarformulariologin": // do = "mostrarformulariologin' 
        Vista::show("login/formLogin"); // realiza vista::
        break;

      case "checklogin": // comprueba login
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
          Pelicula:addPelicula();
        } else {
          Vista::show("login/formLogin");
        }
        break;
//        ...etc... continua mas codigo 
    }
  }

}
