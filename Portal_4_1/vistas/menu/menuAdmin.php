<h1>
  Bienvenido Administrador : 
</h1>
<div>
  <?php echo $_SESSION['nombre_usuario'] ?><br>
</div>
<form method="get" action="Controlador.php">
  <fieldset>
    <legend>Menu Administrador</legend>
    <ol>
      <li>
        <a href='index.php?do=formAnadirPelicula'>Añadir pelicula</a><br/>
      </li>
      <li>
        <a href='index.php?do=formborrarpelicula'>Borrar pelicula</a><br/>
      </li>
      <li>
        <a href='index.php?do=buscarPeliculas'>Buscar pelicula</a><br/>
      </li>
      <li>
        <a href='index.php?do=modificarPeliculas'>Modificar pelicula</a><br/>
      </li>
      <li>
        <a href='index.php?do=consultarUsuario'>Consultar Usuario</a><br/>
      </li>
      <li>
        <a href='index.php?do=formAnadirPelicula'>Insertar película</a><br/>
      </li>
      <li>
        <a href='index.php?do=cerrarsesion'>Cerrar sesión</a>
      </li>
    </ol>
  </fieldset>
</form>