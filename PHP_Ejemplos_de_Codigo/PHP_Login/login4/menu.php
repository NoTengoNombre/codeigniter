<?php

include_once ("seguridad.php");

class Menu {
	function showMenuUser() {
	}
	
	function showMenuAdmin() {
		$s = new Seguridad();
		
		echo "Bienvenido a la web, " . $s->getNombreUsuario() . "<br/>";
		echo "Tipo de usuario: " . $s->getTipoUsuario() . "<br/>";
		echo "Menú<br/>";
		echo "<a href='index.php?do=formanadirpelicula'>Añadir película</a><br/>";
		echo "<a href='index.php?do=formborrarpelicula'>Borrar película</a><br/>";
		echo "<a href=''>Buscar película</a><br/>";
		echo "<a href=''>Modificar película</a><br/>";
		echo "<a href='index.php?do=cerrarsesion'>Cerrar sesión</a>";
	}
}

?>