<!--
    @Created on : 22-dic-2016, 13:11:31
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <form action="Video__17__Condicionales_III_3_Switch_Case.php" method="post" name="datos_usuario" id="form">
      <table width="15%" align="center">
        <tr>
          <td>Nombre: </td>
          <td><label for="nombre_usuario"></label>
            <input type="text" name="nombre_usuario" id="nombre_usuario">
          </td>
        </tr>
        <tr>
        <tr>
          <td>Contraseña: </td>
          <td><label for="contra_usuario"></label>
            <input type="text" name="contra_usuario" id="contra_usuario">
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="enviando" id="enviando">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
