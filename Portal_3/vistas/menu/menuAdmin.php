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
<html>
  <head>
    <meta charset="UTF-8">
    <title>Administrador</title>
  </head>
  <body>
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
            <a href='index.php?do=cerrarsesion'>Cerrar sesión</a>
          </li>
        </ol>
      </fieldset>
    </form>