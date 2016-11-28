<!--
    @Created on : 27-nov-2016, 20:16:32
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <fieldset>
      <legend>Formulario Personas</legend>
      <form method="get" action="../../Controlador.php">
        <br>
        <label>Id Personas</label>
        <input type="text" name="id_personas" value="">
        <br>
        <label>Nombre</label>
        <input type="text" name="nombre" value="">
        <br>
        <label>Fecha Nacimiento</label>
        <input type="datetime" name="fecha_nacimiento" value="">
        <br>
        <label>Fecha Fallecimiento</label>
        <input type="datetime" name="fecha_fallecimiento" value="">
        <br>
        <label>Nacionalidad </label>
        <input type="text" name="nacionalidad" value="">
        <br>
        <input type="hidden" name="do" value="formulario_personas">
        <button name="enviar">Enviar</button>
    </fieldset>
  </form> 
  <?php
  ?>
</body>
</html>
