<!--
    @Created on : 23-dic-2016, 16:27:34
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : 
Expresiones Regulares : 
% -> SUSTITUYE A UNA CADENA DE CARACTERES 
%CABALLERO -> Todas las cadenas que tenga la palabra CABALLERO
CABALLERO% -> Todas las cadenas que tenga al final la palabra CABALLERO

Usar LIKE en el WHERE 

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

    $insertar = "SELECT * FROM productos WHERE G = 'España';";

    $resultados = mysqli_query($conexion, $insertar);
// array asociativo - Ahora los campos de la BD se seleccionan mediante sus campos que los referencian
    while ($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {

      echo "<table><tr><td>";
      echo $fila["A"] . "</td><td>";
      echo $fila["B"] . "</td><td>";
      echo $fila["C"] . "</td><td>";
      echo $fila["D"] . "</td><td>";
      echo $fila["E"] . "</td><td>";
      echo '</td><td></tr></table>';
    }
    ?>
  </body>
</html>
  