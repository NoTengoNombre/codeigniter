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

include_once ("vista.php");
include_once ("login.php");
include_once ("seguridad.php");

class Controlador {

  /**
   * Metodo controlador que va ejecutando
   * las acciones que le van llegando desde el formulario
   * y distintas clases
   */
  public static function control() {
    session_start(); // comienza/recibe los datos de la session

    if (!isset($_REQUEST["do"])) { // si no esta fijado la accion del "do"
      $accion = "mostrarFormularioLogin"; // fuerzo a mostrar el formulario de login para acceder a la aplicacion
    } else { //sino entra en el switch
      $accion = $_REQUEST["do"]; // name="do" viene del formulario  : lleva asignado una accion mediante el value="..."
    }

//  $accion :
//  - almacena el name="do" y lleva implicito el valor de la $accion dentro del value="" - ej: "mostrarFormulario"
    switch ($accion) {
      // ******************** LOGIN *************************
      case "mostrarFormularioLogin": // muestra el formulario
        Vista::show("login/formLogin");
        break;

      case "procesarFormularioLogin":
        $loginOk = Login::checkLogin();
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
//          
//          
//        ...etc...
    }
  }

}
