<?php

include_once ("seguridad.php");

class Menu {

  /**
   *
   * Muestra el menu de User
   */
  function showMenuUser() {
    $s = new Seguridad();
    echo "Bienvenido a la web, " . $s->getNombreUsuario() . "<br>";
    echo "Tipo de usuario: " . $s->getTipoUsuario() . "<br>";
    echo "Menu Usuario<br>";
    echo "<a href='index.php?do=formanadirpelicula'>Añadir pelicula</a><br>";
    echo "<a href='index.php?do=formborrarpelicula'>Borrar pelicula</a><br>";
    echo "<a href='#'>Buscar pelicula</a><br>";
    echo "<a href='#'>Modificar pelicula</a><br>";
    echo "<a href='index.php?do=cerrarsesion'>Cerrar sesion</a>";
  }

  /**
   * Muestra el menu de Admin
   */
  function showMenuAdmin() {
    $s = new Seguridad();
    echo "Bienvenido a la web, " . $s->getNombreUsuario() . "<br>";
    echo "Tipo de usuario: " . $s->getTipoUsuario() . "<br>";
    echo "Menu Admin<br>";
    echo "<a href='index.php?do=formanadirpelicula'>Añadir pelicula</a><br>";
    echo "<a href='index.php?do=formborrarpelicula'>Borrar pelicula</a><br>";
    echo "<a href=''>Buscar pelicula</a><br>";
    echo "<a href=''>Modificar pelicula</a><br>";
    echo "<a href='index.php?do=cerrarsesion'>Cerrar sesion</a>";
  }

}
