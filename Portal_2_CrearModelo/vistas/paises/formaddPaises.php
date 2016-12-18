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
      <legend>Formulario Paises</legend>
      <form method="get" action="Controlador.php">
        <br>
        <label>Id Paises</label>
        <input type="text" name="id_paises" value="">
        <br><br>
        <label>Pais</label>
        <input type="text" name="pais" value="">
        <br><br>
        <label>Ciudad</label>
        <input type="text" name="ciudad" value="">
        <br><br>
        <input type="hidden" name="do" value="formulario_peliculas">
        <button name="enviar">Enviar</button>
    </fieldset>
  </form> 
  <?php
  ?>
</body>
</html>
