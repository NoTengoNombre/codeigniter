<!-- Directorio Vista - Formulario add Personas -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Formulario Añadir Personas</title>
  </head>
  <body>
    <form method="get" action="Controlador.php">
      <fieldset>
        <legend>Formulario Personas</legend>
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
