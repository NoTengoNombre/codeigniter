<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<!--Se muestra la vista con toda las acciones del administrador 
que ha sido llamado desde el controlador -->


Bienvenido, <?php echo $data; ?><br/>
<form method="get" action="Controlador.php">
  <fieldset>
    <legend>Menu Administrador</legend>
    <ol>
      <br>
      <li>
        <a href='index.php?do=formanadirpelicula'>Añadir pelicula</a><br/>
      </li>
      <br>
      <li>
        <a href='index.php?do=formborrarpelicula'>Borrar pelicula</a><br/>
      </li>
      <br>
      <li>
        <a href='index.php?do=buscarPeliculas'>Buscar pelicula</a><br/>
      </li>
      <br>
      <li>
        <a href='index.php?do=modificarPeliculas'>Modificar pelicula</a><br/>
      </li>
      <br>
      <li>
        <a href='index.php?do=cerrarsesion'>Cerrar sesión</a>
      </li>
    </ol>
  </fieldset>
</form>