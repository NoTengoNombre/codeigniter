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
    <form method="get" action="../../Controlador.php">
      <fieldset>
        <legend>Formulario Paises</legend>
        <label>Id_Paises</label>
        <input type="number" maxlength="4" minlength="1" name="id_paises" value="">
        <br>
        <label>Pais</label>
        <input type="text" maxlength="100" minlength="1" name="pais" value="">
        <br>
        <label>Ciudad</label>
        <input type="text" maxlength="100" minlength="4" name="ciudad" value="">
        <input type="hidden" name="do" value="formulario_peliculas">
        <br>
        <input type="submit" value="enviar">
      </fieldset>
    </form>
  </body>
</html>
