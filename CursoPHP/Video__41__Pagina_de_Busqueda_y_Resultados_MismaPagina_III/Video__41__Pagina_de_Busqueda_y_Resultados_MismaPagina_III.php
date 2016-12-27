<!--
    @Created on : 23-dic-2016, 18:13:59
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
    <style>
      table{
        height: auto;
        width: auto;
        border : 1px solid #f00;
        padding: 1px;
      }
    </style>
  </head>
  <body>
    <?php
    $db_host = "localhost";
    $db_usuario = "root";
    $db_pass = '';
    $db_nombre = "x_pruebas";

//    capturar datos que vienen de otra pagina
//    $busqueda = $_GET[" buscar"];

    $conexion = mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar con la BD";
      exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("Error en la conexion");

    mysqli_set_charset($conexion, "utf8");

//    $consulta = "SELECT * FROM producto WHERE G LIKE \"%$busqueda\";";
    $consulta = "SELECT * FROM productos WHERE G = \"$busqueda\"";

    $resultados = mysqli_query($conexion, $consulta);

    while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
      echo '<table><tr><td>';
      echo $fila["A"] . '</td><td>';
      echo $fila["B"] . '</td><td>';
      echo $fila["C"] . '</td><td>';
      echo $fila["D"] . '</td><td>';
      echo $fila["E"] . '</td><td>';
      echo $fila["F"] . '</td><td>';
      echo $fila["G"] . '</td><td>';
      echo '</td>';
      echo '</tr>';
    }
    echo '</table>';

    mysqli_close($conexion);
    ?>
  </body>
</html>
