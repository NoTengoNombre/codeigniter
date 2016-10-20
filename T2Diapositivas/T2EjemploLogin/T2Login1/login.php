<!DOCTYPE html>
<!--
    @Created on : 20-oct-2016, 21:27:47
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $usuario = $_REQUEST["usuario"];
    $p = $_REQUEST["passwd"];
    if (($usuario == "asd") && ($p == "123")) {
      echo "Bienvenido a la web , $usuario <br />";
      echo "<a href='index.html'>Volver</a>";
    } else {
      echo "Nombre de usuario " . $usuario . " o contraseña incorrecta ";
      echo "<a href='../'>Volver</a>"; // Me envia al directorio Index of
    }
    ?>
  </body>
</html>
