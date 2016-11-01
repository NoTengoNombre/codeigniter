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
      $contador = 0;
      echo "<table class='nuevo2'>";
      echo "<th colspan='5'> Tabla de Multiplicar del Número </th>";
      for ($v1 = 0; $v1 < 5; $v1++) {
       echo "<tr align='center'>";
       echo "<td>", $_REQUEST['numero'], " x ", " $contador ", " = ", $_REQUEST['numero'] * $contador++, "</td>";
       echo "<td>", $_REQUEST['numero'], " x ", " $contador ", " = ", $_REQUEST['numero'] * $contador++, "</td>";
       echo "<td>", $_REQUEST['numero'], " x ", " $contador ", " = ", $_REQUEST['numero'] * $contador++, "</td>";
       echo "<td>", $_REQUEST['numero'], " x ", " $contador ", " = ", $_REQUEST['numero'] * $contador++, "</td>";
       echo "<td>", $_REQUEST['numero'], " x ", " $contador ", " = ", $_REQUEST['numero'] * $contador++, "</td>";
       echo "</tr>";
       "</table>";
      }
      ?>
  </body>
</html>
