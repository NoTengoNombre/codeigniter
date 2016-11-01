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
      . '<td>Tabla Multiplicar ' . $_REQUEST['numero']
      . '</td>'
      . '</tr>'
      . '</table>';

      echo '<br>';
      ?>

    <?php
    echo '<table border = 2>';
    for ($v1 = 0; $v1 < 6; $v1++) {
     echo '<tr>';
     for ($v1 = 0; $v1 < 6; $v1++) {
      echo '<td>' . $_REQUEST['numero'] . '</td>';
//      $numero = $numero * 2;
     }
     echo '</tr>';
    }
    echo '</table>'
    ?>
  </body>
</html>
