<!-- N.F.N.D-->

<!-- Official Guide........: http://php.net/manual/es/index.php
**   Official Helps........: 
**   Author................: RadWulf Candle
**   Date..................: 
**   Last changed..........:
-->


<!DOCTYPE html>
<html>
  <head>
    <title> Title </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="micss.css">
  </head>
  <body>

    <?php
//     tabla
    echo "<table class = 'nuevo1'>";
//     cabeza
    echo "<th colspan='2' class='nuevo1'> Valores </th>";
//     columna
    echo "<tr>";
//     fila
    echo "<td>Fila : " . $_REQUEST['numero1'] . "</td>";
    echo "<td>Columnas : " . $_REQUEST['numero2'] . "</td>";
    echo "</tr>";
    echo '</table>';
    ?>
    <br>

    <?php
    echo "<table class ='nuevo2'>";
    for ($n1 = 0; $n1 < $_REQUEST['numero1']; $n1++) {
//    coluna
      echo "<tr>";
//    fila
      echo "<td>", $_REQUEST['numero1'] * rand(1, 100), "</td>";
      for ($n2 = 0; $n2 < $_REQUEST['numero2'] - 1; $n2++) {
//    fila
        echo "<td>", $_REQUEST['numero2'] * rand(1, 100), "</td>";
      }
      echo '</tr>';
    }
    echo '</table>';
    ?> 
  </body>
</html>


