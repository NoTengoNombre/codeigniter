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
    <?php
    $cod = $_GET["c_art"];
    $sec = $_GET["seccion"];
    $n_art = $_GET["n_art"];
    $precio = $_GET["precio"];
    $fec = $_GET["fecha"];
    $imp = $_GET["importado"];
    $por = $_GET["p_orig"];

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "x_pruebas";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if (mysqli_errno($conexion)) {
      echo "Error en la base de datos";
      exit();
    }

    mysqli_select_db($conexion, $database) or die("Error en la conexion BD");

    mysqli_set_charset($conexion, "utf8");

    $consulta = "INSERT INTO PRODUCTOS (A,B,C,D,E,F,G) VALUES (\"$cod\",\"$sec\",\"$n_art\",\"$precio\",\"$fec\",\"$imp\",\"$por\");";

    $resultados = mysqli_query($conexion, $consulta);

    if ($resultados == false) {
      echo "Error" . mysqli_error($resultados);
    } else {
      echo "Registro Guardado";
      echo "<table><tr><td>$cod</td></tr>";
      echo "<tr><td>$sec</td></tr>";
      echo "<tr><td>$n_art</td></tr>";
      echo "<tr><td>$precio</td></tr>";
      echo "<tr><td>$fec</td></tr>";
      echo "<tr><td>$imp</td></tr>";
      echo "<tr><td>$por</td></tr>";
      echo "</table>";
    }

    mysqli_close($conexion);
    ?>
  </body>
</html>
