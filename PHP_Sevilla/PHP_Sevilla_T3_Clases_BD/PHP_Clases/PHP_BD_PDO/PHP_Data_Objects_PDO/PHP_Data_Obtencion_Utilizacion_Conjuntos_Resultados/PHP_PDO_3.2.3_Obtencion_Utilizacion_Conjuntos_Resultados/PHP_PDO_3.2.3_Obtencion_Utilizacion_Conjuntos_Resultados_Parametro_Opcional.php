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
    $dwes = new PDO("mysql:host=localhost;dbname=dwes", "root", "");
    $resultado = $dwes->query("SELECT producto,unidades FROM stock");
    while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
      echo "Producto: " . $registro->producto . " : " . $registro['unidades'] . "<br>";
    }
    ?>
  </body>
</html>
