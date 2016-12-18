<?php

include_once ("Vista.php");
include_once ("Usuarios.php");
include_once ("Peliculas.php");
include_once ("Seguridad.php");

class Controlador {

  public function control() {

    if (!isset($_REQUEST["do"]))
      $accion = "mostrarformulariologin";
    else
      $accion = $_REQUEST["do"];

    $s = new Seguridad();   // Capa de seguridad
    $vista = new Vista();

    switch ($accion) {
      case "mostrarformulariologin":
        $vista->show("login/formLogin");
        break;
      case "checklogin":
        $login = new Login();
        $login->checkLogin();
        break;
      case "cerrarsesion":
        $s->cerrarSesion();
        echo "La sesión se ha cerrado correctamente<br/>";
        echo "<a href='index.php'>Volver al inicio</a>";
        break;

      case "showmenuadmin":
        $data["nombreusr"] = $s->getNombreUsuario();
        $data["tipousr"] = $s->getTipoUsuario();
        $vista->show("menu/menuAdmin", $data);
        break;

      case "formanadirpelicula":
        $vista->show("peliculas/formAddpelicula");
        break;

      case "addPelicula":
        $peliculas = new Peliculas();
        $r = $peliculas->addPelicula();
        if ($r == 1)
          $mensaje = "Ha ocurrido un error al añadir la película";
        else
          $mensaje = "Película añadida con éxito";
        $vista->show("peliculas/resultadoAddpelicula", $mensaje);
        break;

      case "listarPeliculas":
        // Pedimos al modelo Pelicula los datos
        $peliculas = new Peliculas();
        $lista_peliculas = $peliculas->getAllPeliculas();
        // Empaquetamos los datos para la vista
        $data["titulo"] = "Lista de peliculas";
        $data["nombreUsr"] = $s->getNombreUsuario();
        $data["lista_peliculas"] = $lista_peliculas;
        // Mostramos la vista
        $vista->show("peliculas/listaPeliculas", $data);
        break;

      // ... etc ...
    }
  }

}
