<!DOCTYPE html>
<!--
    @Created on : 10-oct-2016, 22:42:40
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
-->
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <title>Tabla 1</title>
  </head>
  <body>
    <?php
    $contador = 0;
    echo "<table>";
    echo "<thead> mensaje";
    for ($v1 = 0; $v1 <= 10; $v1++) {
      echo "<tr>";
      echo "<th>", $_REQUEST['numero'], ' x ', $contador, " = ", $_REQUEST['numero'] * $contador++, " </th>";
      echo "</tr>";
      echo "</thead>";
    }
    echo "</table>";
    ?>
  </body>
</html>
