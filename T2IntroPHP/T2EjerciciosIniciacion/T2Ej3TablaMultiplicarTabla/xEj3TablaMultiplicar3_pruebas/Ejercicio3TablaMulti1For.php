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
//      . '<td>Tabla Multiplicar ' . $_REQUEST['numero'] . '</td>'
      . '<td>Tabla Multiplicar ' . '</td>'
      . '</tr>'
      . '</table>';
      ?>


    <?php
    $contador = 0;
    for ($v1 = 0; $v1 < 6; $v1++) {
     echo "<table class='nuevo'>";
     echo '<tr>' .
     "<td> ", $contador++, "</td>" .
     "<td> ", $contador++, "</td>" .
     "<td> ", $contador++, "</td>" .
     "<td> ", $contador++, "</td>" .
     "<td> ", $contador++, "</td>" .
     '</tr>' .
     "</table>";
    }
    ?>
  </body>
</html>
