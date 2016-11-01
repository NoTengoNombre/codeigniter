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
      echo "<table class='nuevo'>"
      . "<tr>"
      . "Tabla de Multiplicar del numero 3"
      . "</tr>"
      . "</table>";
      for ($v1 = 0; $v1 < 5; $v1++) {
       echo "<table class='f'>"
       . "<tr>"
//      . "<td>"
       . "<td> Celda 1 </td> <td>Celda 2</td> <td>Celda 3</td><td>Celda 4</td><td>Celda 5</td> "
//      . $_REQUEST['numero']
//      . "</td>"
       . "</tr>"
       . "</table>";
      }
      echo isset($_REQUEST['envio']);
      ?>
    <p>Hello world!</p>
  </body>
</html>
