<!-- Directorio Vista - Formulario add Paises -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Paises</title>
  </head>
  <body>
    <form method="get" action="Controlador.php">
      <fieldset>
        <legend>Formulario Paises</legend>
        <br>
        <label>Id Paises</label>
        <input type="text" name="id_paises" value="">
        <br>
        <label>Pais</label>
        <input type="text" name="pais" value="">
        <br>
        <label>Ciudad</label>
        <input type="text" name="ciudad" value="">
        <br>
        <input type="hidden" name="do" value="formAnadirPelicula">
        <button name="enviar">Enviar</button>
      </fieldset>
    </form> 
    <?php
    ?>
  </body>
</html>
