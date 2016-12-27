<!--
    @Created on : 24-dic-2016, 12:44:51
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
    $busqueda = $_GET["buscar"];

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "x_pruebas";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
      echo "Error en la conexion bd";
      exit();
    }

    mysqli_select_db($conexion, $database) or die("Error en la conexion");

    mysqli_set_charset($conexion, "utf8");

    $consulta = "SELECT * FROM productos WHERE C LIKE '%$busqueda%';";

    $resultado = mysqli_query($conexion, $consulta);

    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
      echo "<table>";
      echo "<tr>";
      echo "<td>";
      echo $fila["A"] . "</td><td>";
      echo $fila["B"] . "</td><td>";
      echo $fila["C"] . "</td><td>";
      echo $fila["D"] . "</td><td>";
      echo $fila["E"] . "</td><td>";
      echo $fila["F"] . "</td><td>";
      echo $fila["G"] . "</td><td>";
      echo "</td>";
      echo "</tr>";
      echo "</table>";
    }
    ?>
  </body>
</html>
