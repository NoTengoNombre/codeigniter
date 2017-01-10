<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : Agregar datos $data
-->
<!--
El controlador llama a este script para mostrar 
la vista con todas las acciones de usuario que se enviaran
otra vez al controlador para realizar las acciones
que seleccione desde aqui
-->



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Formulario Usuario</title>
  </head>
  <body>
    <!-- Tengo que mostrar los datos del usuario que se ha logueado -->
    <h1>Bienvenido </h1>
    <?php echo $data; ?><br/>
    <form method="get" action="Controlador.php">
      <fieldset>
        <legend>Menu Usuario</legend>
        <ol>
          <li>
            <a href='index.php?do=buscarpelicula'>Buscar pelicula</a><br/>
          </li>
          <li>
            <a href='index.php?do=cerrarsesion'>Cerrar sesion</a>
          </li>
        </ol>
      </fieldset>
    </form>
  </body>
</html>

