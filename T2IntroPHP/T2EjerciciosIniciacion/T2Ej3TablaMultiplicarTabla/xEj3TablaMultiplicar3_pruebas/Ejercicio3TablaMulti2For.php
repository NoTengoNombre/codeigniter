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
    <link rel="stylesheet" type="text/css" href="micss.css">
  </head>
  <body>
      <?php
      $valor = 4;
      echo '<table border = 1>'
      . '<tr>'
      . '<td>Tabla Multiplicar ' . $_REQUEST['numero'] . '</td>'
      . '</tr>'
      . '</table>';
      echo '<br>';
      ?>


    <?php
    $contador = 0;
    echo '<table border = 2>';
//    filas
    for ($n1 = 0; $n1 < 5; $n1++) {
//     Pinta las columnas
     echo '<tr>';
     for ($n2 = 0; $n2 < 5; $n2++) {
//     Pinta las filas
      echo '<td>', $_REQUEST['numero'] * $contador++, '</td>';
//      $n = $n + 1;
     }
     echo '</tr>';
    }
    echo '</table>';
    ?>
  </body>
</html>
