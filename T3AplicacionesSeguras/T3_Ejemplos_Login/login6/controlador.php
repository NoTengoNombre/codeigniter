<?php

include_once ("vista.php");
include_once ("login.php");
include_once ("peliculas.php");
include_once ("seguridad.php");
	
class Controlador {

  public function control() {
  
	if (!isset($_REQUEST["do"]))
		$accion = "mostrarformulariologin";
	else
		$accion = $_REQUEST["do"];

    $s = new Seguridad();			// Capa de seguridad
	$vista = new Vista();
		
	switch($accion) {
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
			$data["nombreusr"] = "alfredo";
			$data["tipousr"] = "admin";
			$vista->show("menu/menuAdmin", $data);
			break;
			
		case "formanadirpelicula":
			$vista->show("peliculas/formAddpelicula");
			break;

		case "addPelicula":
			echo "Estoy en añadir pelicula";
			break;
			
		case "listarPeliculas":
			// Pedimos al modelo Pelicula los datos
			$peliculas = new Peliculas();
			$lista_peliculas = $peliculas->getPeliculas();
			// Empaquetamos los datos para la vista
			$data["titulo"] = "Lista de peliculas";
			$data["nombreUsr"] = $s->getNombreUsuario();
			$data["lista_peliculas"] = $lista_peliculas;
			// Mostramos la vista
			$vista->show("peliculas/listaPeliculas", $data);
			break;
			
		
		
		
		
		
		
		
		
	}
  }
}