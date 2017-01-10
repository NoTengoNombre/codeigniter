<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<!--Se muestra la vista con toda las acciones del administrador 
que ha sido llamado desde el controlador -->
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Error en Formulario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="">
  </head>
  <body>
    <h1>Bienvenido </h1>
    <?php echo $data; ?><br/>
    <form method="get" action="Controlador.php">
      <fieldset>
        <legend>Menu Administrador</legend>
        <ol>
          <li>
            <a href='index.php?do=formanadirpelicula'>Añadir pelicula</a><br/>
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
            <a href='index.php?do=cerrarsesion'>Cerrar sesión</a>
          </li>
        </ol>
      </fieldset>
    </form>
  </body>
</html>