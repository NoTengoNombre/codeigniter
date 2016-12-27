<!--
    @Created on : 23-dic-2016, 19:17:02
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
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "x_pruebas";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_errno($conexion)) {
      echo "Error en la base de datos";
      exit();
    }

    mysqli_select_db($conexion, $database) or die("Error en la base de datos");

    mysqli_set_charset($conexion, "utf8");

//    $consulta = "SELECT * FROM productos WHERE C = $busqueda";
    $consulta = "SELECT * FROM productos WHERE G = 'USA';";

    $resultado = mysqli_query($conexion, $consulta);

    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
      echo '<table><tr><td>';
      echo $fila["A"] . "</td><td>";
      echo $fila["B"] . "</td><td>";
      echo $fila["C"] . "</td><td>";
      echo $fila["D"] . "</td><td>";
      echo $fila["E"] . "</td><td>";
      echo $fila["F"] . "</td><td>";
      echo $fila["G"] . "</td><td>";
      echo "</td>";
      echo "</tr>";
    }
    echo "</table>";

    mysqli_free_result($resultado);
    mysqli_close($conexion);
    ?>
  </body>
</html>
