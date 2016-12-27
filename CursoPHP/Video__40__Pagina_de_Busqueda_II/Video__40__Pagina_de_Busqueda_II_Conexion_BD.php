<!--
    @Created on : 23-dic-2016, 17:02:15
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
//    Almacename lo que le estoy pasando por la url del cuadro de texto buscar
    $busqueda = $_GET["buscar"];

    $db_host = "localhost";
    $db_nombre = "x_pruebas";
    $db_pass = "";
    $db_usuario = "root";

    $conexion = mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar con la BD";
      exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BD");

    mysqli_set_charset($conexion, "utf8");

    $consulta = "SELECT * FROM productos where G = \"$busqueda\";";
//    $consulta = "SELECT * FROM productos where G LIKE \"%$busqueda\";";
//    $consulta = "SELECT * FROM productos where G LIKE \"%$busqueda\";";
//    $consulta = "SELECT * FROM productos where G = $busqueda ";

    $resultados = mysqli_query($conexion, $consulta);

    while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
      echo '<table><tr><td>';
      echo $fila['A'] . '</td><td>';
      echo $fila['B'] . '</td><td>';
      echo $fila['C'] . '</td><td>';
      echo '</tr></td></table>';
    }
    ?>
  </body>
</html>
