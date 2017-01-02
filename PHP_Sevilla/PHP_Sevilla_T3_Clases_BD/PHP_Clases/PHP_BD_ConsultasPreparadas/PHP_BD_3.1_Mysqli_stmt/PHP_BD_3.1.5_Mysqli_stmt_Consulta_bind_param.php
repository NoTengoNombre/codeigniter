<!--
    @Created on : 26-nov-2016, 12:06:53
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $dwes = new mysqli('localhost', 'root', '', 'dwes');
    if ($dwes) {
      echo "<br>Conexion establecida : ";
      $insertar = $dwes->stmt_init();
      $insertar->prepare('SELECT producto , unidades FROM stock WHERE unidades < 2');
      $insertar->execute();
      $insertar->bind_result($producto, $unidades);
      while ($insertar->fetch()) {
        print "<p>• Producto " . $producto . " - Unidades - " . $unidades . "</p>";
      }
      $insertar->execute();
      $insertar->close();
    }
    ?>
  </body>
</html>
