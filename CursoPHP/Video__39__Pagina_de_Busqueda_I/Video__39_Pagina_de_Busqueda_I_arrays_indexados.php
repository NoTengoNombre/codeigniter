<!--
    @Created on : 23-dic-2016, 16:27:34
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
        background: #000;
        color : #fff;
        height: auto;
        width: auto;
        border: 1px solid #f00;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <?php
    $db_host = "localhost";
    $db_pass = "";
    $db_usuario = "root";
    $db_nombre = "x_pruebas";

    $conexion = mysqli_connect($db_host, $db_usuario, $db_pass);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar a la bd";
      exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BD");

    mysqli_set_charset($conexion, "utf8");

    $consulta = "SELECT * FROM productos WHERE G = 'España';";

    $resultados = mysqli_query($conexion, $consulta);
// arrays indexado 
    while ($fila = mysqli_fetch_row($resultados)) {

      echo "<table><tr><td>";
      echo $fila[0] . "</td><td>";
      echo $fila[1] . "</td><td>";
      echo $fila[2] . "</td><td>";
      echo $fila[3] . "</td><td>";
      echo $fila[4] . "</td><td>";
      echo $fila[5] . "</td><td>";
      echo $fila[6] . "</td><td>";
      echo '</td><td></tr></table>';
    }
    ?>
  </body>
</html>
