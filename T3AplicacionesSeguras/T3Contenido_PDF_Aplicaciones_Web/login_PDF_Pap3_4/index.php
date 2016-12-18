<!--
    @Created on : 13-dic-2016, 22:14:59
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
    <h1>Autentificacion PHP</h1>
    <form action="control.php" method="get">
      <table align="center" width="255" cellspacing="2" cellpadding="2" border="0">
        <tr>
          <td colspan="2" 
          <?php
//          if (filter_input(INPUT_GET, "errorusuario") == "si") {
          if (isset($_GET["errorusuario"]) == "si") {
            var_dump($_GET["errorusuario"]);
            ?>
                bgcolor="red">
              <span style="color:#fff">
                <b>Datos Incorrectos</b></span>
            <?php } else { ?> 
              <span bgcolor="#cccccc">
                <b>Introduce tu clave de acceso</b>
            <?php } ?></td>
        </tr>
        <tr>
          <td align="right">USER:</td>
          <td><input type="text" name="usuario" size="8" maxlength="50"></td>
        </tr>
        <td align="right">PASSWD:</td>
        <td><input type="password" name="contrasena" size="8" maxlength="50"></td>
        </td>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" value="entrar">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
