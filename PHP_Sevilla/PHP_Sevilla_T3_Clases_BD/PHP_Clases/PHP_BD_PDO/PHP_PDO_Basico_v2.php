<!--
    @Created on : 27-nov-2016, 18:19:59
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
    $dwes = new PDO("mysql:host=localhost;dbname=dwes", "dwes", "");
    $resultado = $dwes->query("SELECT producto , unidades FROM stock");
    $resultado->bindColumn(1, $producto);
    $resultado->bindColumn(2, $unidades);
    while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
      echo "Producto " . $producto . " : " . $unidades . " <br>";
    }
    ?>
  </body>
</html>
