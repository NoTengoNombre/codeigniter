
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

include_once ("vistas/Vista.php");
include_once ("modelo/Login.php");
include_once ("Seguridad.php");
include_once ("modelo/Usuarios.php");
include_once ("modelo/Peliculas.php");

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
        if ($loginOk) { // si es TRUE 
//          Seguridad -> sus valores estan en toda la app
          if (Seguridad::getTipoUsuario() == "admin") {
            Vista::show("menu/menuAdmin");
          }
          if (Seguridad::getTipoUsuario() == "user") {
            Vista::show("menu/menuUser");
          }
        } else { // si es FALSE 
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
          Vista::show("usuarios/insercionOk,menu/menuUser"); //mostrar 2 vistas 
        } else {
          Vista::show("usuarios/insercionError,usuarios/formularioAltaUsuarios"); //mostrar 2 vistas 
        }
        break;
      //*************** CONSULTAR USUARIO ***********************
      case "consultarUsuario":
        $resultado = Usuarios::consultarUsuarios();
        if ($resultado == null) { // No hay resultados
          Vista::show("algubn-mensjae-error");
        } else {        // Sí hay resultados
          $data["resultado"] = $resultado;
          Vista::show("usuarios/mostrarListaUsuarios", $data); // mostrar en vista una lista de usuarios / volver al controlador
        }
        break;

      case "cerrarsesion":
        Seguridad::cerrarSesion();
        echo "La sesion se ha cerrado correctamente<br/>";
        echo "<a href='index.php'>Volver al inicio</a>"; // volver al indice 
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
          $result = Peliculas::insertarVideos();
          if ($result == 1) { // La inserción ha tenido éxito
            $data["mensaje"] = "Inserción realizada con éxito";
            Vista::show("peliculas/formAddPelicula", $data);
          } else {  // La inserción ha fallado
            $data["mensaje"] = "La inserción ha fallado";
            Vista::show("peliculas/formAddPelicula", $data);
          }
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
