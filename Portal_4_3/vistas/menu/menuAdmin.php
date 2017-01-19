<h1>
  Bienvenido Administrador : <?php echo $_SESSION['nombre_usuario'] ?><br>
</h1>
<div>
</div>
<form method="get" action="Controlador.php">
  <fieldset>
    <legend>Menu Administrador</legend>
    <ol>
      <li>
        <a href='index.php?do=mostrar_todos_paises'>Mostrar Todos Paises</a><br/>
        <hr>
      </li>
      <li>
        <a href='index.php?do=mostrar_paises_id'>Mostrar Paises Id</a><br/>
        <hr>
      </li>
      <li>
        <a href='index.php?do=consultarPelicula'>Consultar Peliculas</a><br/>
      </li>
      <li>
        <a href='index.php?do=formAnadirPelicula'>Añadir pelicula</a><br/>
      </li>
      <li>
        <a href='index.php?do=formborrarpelicula'>Borrar pelicula</a><br/>
      </li>
      <li>
        <a href='index.php?do=formBuscarPeliculas'>Buscar pelicula</a><br/>
      </li>

      <li>
        <a href='index.php?do=modificarPeliculas'>Modificar pelicula</a><br/>
      </li>
      <li>
        <a href='index.php?do=formAnadirPelicula'>Insertar película</a><br/>
        <hr>
      </li>
      <li>
        <a href='index.php?do=consultarUsuario'>Consultar Usuario</a><br/>
      </li>
      <li>
        <hr>
        <a href='index.php?do=cerrarsesion'>Cerrar sesión</a>
      </li>
    </ol>
  </fieldset>
</form>