<!--
    @Created on : 23-dic-2016, 14:12:57
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
        width: 50%;
        border: 1px solid #f00;
        margin: 0px 10px 0px 0px;
      }
    </style>
  </head>
  <body>
    <?php
    require 'Video__38_Importacion_de_tablas_MySql_Consultas_SQL_con_filtros_datos_conexion.php';

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

    if (mysqli_connect_error()) {
      echo "Fallo al conectar con la BD";
      exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra DB");

    mysqli_set_charset($conexion, "uft8");

    $insertar = "SELECT * FROM PRODUCTOS";

    $resultado = mysqli_query($conexion, $insertar);

    while ($fila = mysqli_fetch_row($resultado)) {
//      crear una tabla
      echo "<table border='1' width='50%'><tr><td>";
      echo $fila[0] . "</td><td>";
      echo $fila[1] . "</td><td>";
      echo $fila[2] . "</td><td>";
      echo $fila[3] . "</td><td>";
      echo $fila[4] . "</td><td>";
      echo $fila[5] . "</td><td>";
      echo $fila[6] . "</td></tr></table>";
    }
      echo '<hr>';
    ?>
  </body>
</html>
