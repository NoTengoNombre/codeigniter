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
      $consulta = $dwes->stmt_init();
      $consulta->prepare('SELECT producto , unidades FROM stock WHERE unidades < 2');
      $consulta->execute();
      $consulta->bind_result($producto, $unidades);
      while ($consulta->fetch()) {
        print "<p>• Producto " . $producto . " - Unidades - " . $unidades . "</p>";
      }
      $consulta->execute();
      $consulta->close();
    }
    ?>
  </body>
</html>
