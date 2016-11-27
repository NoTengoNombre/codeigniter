<!--
    @Created on : 27-nov-2016, 17:44:07
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
    $dwes = new PDO('mysql:host=localhost;dbname=dwes', 'root', '');
    $registro = $dwes->query('SELECT producto , unidades FROM stock');
    echo "Productos - Unidades ";
    echo "<br>";
    foreach ($registro as $row) {
      print $row['producto'] . " - - - " . $row['unidades'];
      echo "<br>";
    }
    ?>
  </body>
</html>
