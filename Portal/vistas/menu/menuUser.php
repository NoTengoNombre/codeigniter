<!--
    @Created on : 22-nov-2016, 18:22:04
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<!--
El controlador llama a este script para mostrar 
la vista con todas las acciones de usuario que se enviaran
otra vez al controlador para realizar las acciones
que seleccione 
-->
Bienvenido, <?php echo $data; ?><br/>

<form method="get" action="../../Controlador.php">
  <fieldset>
    <legend>Menu Usuario</legend>
    <ol>
      <li>
        <a href='index.php?do=buscarpelicula'>Buscar pelicula</a><br/>
      </li>
      <br>
      <li>
        <a href='index.php?do=cerrarsesion'>Cerrar sesion</a>
      </li>
    </ol>
  </fieldset>
</form>
