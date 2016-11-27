<!--
    @Created on : 27-nov-2016, 20:26:14
    @Author     : RVS - N.F.N.D - Home
    @Pag        : http://php.net/manual/es/mysqli-result.fetch-assoc.php
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
      printf("Conexion Fallida: %s\n", $mysqli->connect_error);
      exit("Abortada conexion");
    }

    $consulta = "SELECT Name , CountryCode FROM city";
    $resultado = $mysqli->query($consulta);
    if ($resultado) {
      while ($fila = $resultado->fetch_assoc()) {
        printf("%s (%s)\n", $fila["Name"], $fila["CountryCode"]);
        echo '<br>';
      }
      $resultado->free();
    }
    $mysqli->close();
    ?>
  </body>
</html>
