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
    <table class="egt">
      <tr>
        <td>Tabla de Multiplicar del numero </td>
      </tr>
      <tr>
        <td>Nombre</td><td>Apellido</td><td>Teléfono</td>
      </tr>
      <tr>
        <td>Pablo</td><td>Garcia</td><td>123456789</td>
      </tr>
      <tr>
        <td>Pedro</td><td>Sanchez</td><td>234567890</td>
      </tr>
      <tr>
        <td>Antonio</td><td>Fernandez</td><td>345678901</td>
      </tr>
    </table> 
    <?php
    echo "<table class='nuevo'>"
    . "<tr>"
    . "<td>"
    . "Tabla de Multiplicar del numero 3"
    . "</td>"
    . "</tr>"
    . "</table>";
    for ($v1 = 0; $v1 < 25; $v1++) {
     echo "<table class='egt1'>"
     . "<tr>"
     . "<td>"
     . "tabla"
     . "</td>"
     . "</tr>"
     . "</table>";
    }
    ?>
  </body>
</html>


