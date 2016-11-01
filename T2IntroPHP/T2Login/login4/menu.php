<?php

include_once ("seguridad.php");

class Menu {

  function showMenuUser() {
    
  }

  function showMenuAdmin() {
    $s = new Seguridad();

    echo "Bienvenido a la web, " . $s->getNombreUsuario() . "<br>";
    echo "Tipo de usuario: " . $s->getTipoUsuario() . "<br>";
    echo "Menu<br>";
    echo "<a href='index.php?do=formanadirpelicula'>Añadir pelicula</a><br>";
    echo "<a href='index.php?do=formborrarpelicula'>Borrar pelicula</a><br>";
    echo "<a href=''>Buscar pelicula</a><br>";
    echo "<a href=''>Modificar pelicula</a><br>";
    echo "<a href='index.php?do=cerrarsesion'>Cerrar sesion</a>";
  }

}
