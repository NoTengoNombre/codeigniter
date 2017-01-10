
<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
//Aqui se van ejecutando todos los metodos de las distintas clases
//Tambien muestra las vistas despues de cada accion
//Paginas en general : cambia las pagians en paginas : direccionador
// controlador llama a las vistas

include_once ("Vista.php");
include_once ("Login.php");
include_once ("Seguridad.php");
include_once ("modelo/Usuarios.php");

class Controlador {

  /**
   * Metodo controlador que va ejecutando
   * las acciones que le van llegando desde el formulario
   * y distintas clases
   */
  public static function control() {
    session_start();

    if (!isset($_REQUEST["do"])) { // Si nunca se ejecuto
      $accion = "mostrarFormularioLogin";
    } else {
      $accion = $_REQUEST["do"];
    }
    // *********************************************
    switch ($accion) {
      case "mostrarFormularioLogin":
        Vista::show("login/formLogin");
        break;
      // *********************************************
      case "procesarFormularioLogin":
        $loginOk = Login::checkLogin(); // devuelve -> "admin" o "user"
        if ($loginOk) {
          if (Seguridad::getTipoUsuario() == "admin") {
            Vista::show("menu/menuAdmin");
          }
          if (Seguridad::getTipoUsuario() == "user") {
            Vista::show("menu/menuUser");
          }
        } else {
          Vista::show("login/errorLogin");
        }
        break;
      // ******************** ALTAS *************************
      // • Si pulso procesarFormularioLogin -> Registrarse -> llego aqui.
      case "mostrarFormularioAltaUsuario":
        Vista::show("usuarios/formularioAltaUsuarios");
        break;
      case "procesarFormularioAltaUsuario":
        $result = Usuarios::insertarUsuario();
        if ($result == 1) {
          Vista::show("usuarios/insercionOk,menu/menuUser");
        } else {
          Vista::show("usuarios/insercionError,usuarios/formularioAltaUsuarios");
        }
        break;
    //*************** CONSULTAR USUARIO ***********************
      case "consultarUsuario":
        $resultado = Usuarios::consultarUsuarios();
        if ($resultado) { // devuelve 1 siempre 
          Vista::show("menu/menuAdmin", $resultado);
        }
        break;

      case "cerrarsesion":
        Seguridad::cerrarSesion();
        echo "La sesion se ha cerrado correctamente<br/>";
        echo "<a href='index.php'>Volver al inicio</a>";
        break;
      // ******************** MENÚS *************************
      case "showmenuadmin":
        if (Seguridad::getTipoUsuario() == "admin") {
          $nombreUsuario = Seguridad::getNombreUsuario();
          Vista::show("menu/menuAdmin", $nombreUsuario);
        } else {
          Vista::show("login/formLogin");
        }
        break;
      case "showMenuUser":
        if (Seguridad::getTipoUsuario() == "user") {
          $nombreUsuario = Seguridad::getNombreUsuario();
          Vista::show("menu/menuUser", $nombreUsuario);
        } else {
          Vista::show("login/formLogin");
        }
        break;
      // ******************** PELICULAS *************************
      case "formAnadirPelicula": 
        if (Seguridad::getTipoUsuario() == "admin") {
          Vista::show("peliculas/formAddPelicula");
        } else {
          Vista::show("login/formLogin");
        }
        break;
      case "addPelicula": // INSERT
        if (Seguridad::getTipoUsuario() == "admin") {
          
        } else {
          Vista::show("login/formLogin");
        }
        break;
//          
//          
//        ...etc...
    }
  }

}
