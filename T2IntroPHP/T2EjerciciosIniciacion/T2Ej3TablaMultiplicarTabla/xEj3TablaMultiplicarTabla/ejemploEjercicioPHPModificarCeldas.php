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
      echo
      "<table class='nuevo'>"
      . "<tr>"
      . "<td>"
      . "Tabla de Multiplicar del numero 3"
      . "</td>"
      . "</tr>"
      . "</table>";
      for ($v1 = 0; $v1 < 5; $v1++) {
       echo
       "<table class='f'>"
       . "<tr>"
       . "<td> Celda 1 </td> "
       . "<td>Celda 2</td> "
       . "<td>Celda 3</td>"
       . "<td>" . $_POST['numero'] . "</td>"
       . "<td>Celda 5</td> "
       . "</tr>"
       . "</table>";
      }

      echo isset($_REQUEST['envio']);
      ?>
    <p>Hello world!</p>
  </body>
</html>
