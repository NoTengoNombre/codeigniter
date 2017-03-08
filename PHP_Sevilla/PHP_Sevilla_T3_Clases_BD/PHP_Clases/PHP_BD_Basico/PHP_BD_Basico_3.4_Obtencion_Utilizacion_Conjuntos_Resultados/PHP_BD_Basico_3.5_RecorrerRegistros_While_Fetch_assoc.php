<!--
    @Created on : 25-nov-2016, 19:45:32
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
    $mysqli = new mysqli('localhost', 'root', '', 'world');

    if ($mysqli->connect_errno) {
      printf("Conexion fallida: %s\n", $mysqli->connect_error);
      exit("Conexion Abortada - Numero de Error : " . $mysqli->connect_errno);
    }

//    $consulta = "SELECT Name , CountryCode FROM City ORDER BY ID DESC LIMIT 50,5";
    $insertar = "SELECT Name , CountryCode FROM City WHERE id < 10";

    if ($resultado = $mysqli->query($insertar)) {
      while ($fila = $resultado->fetch_assoc()) {
        printf("<pre>%s (%s)\n", $fila["Name"], $fila["CountryCode"] . "</pre>");
      }
      $resultado->free();
    }
    $mysqli->close();
    ?>
  </body>
</html>
