<!--
    @Created on : 20-dic-2016, 12:18:38
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
    <?php
    $mysqli = new mysqli("localhost", "root", "", "world");

    if ($mysqli->connect_errno) {
      printf("Conexion fallida: %s\n", $mysqli->connect_error);
      exit();
    }

//    $consulta = "SELECT "
    ?>
  </body>
</html>
