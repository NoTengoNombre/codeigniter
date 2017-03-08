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
//      $consulta->prepare('INSERT INTO familia (cod,nombre) VALUES ("TABLET","Tablet PC")');
      $insertar->prepare('INSERT INTO familia (cod,nombre) VALUES (?,?)');
      $cod_producto = "TABLET";
      $nombre_producto = "Tablet PC";
//      No permite literales : producte error
//      $consulta->bind_param('ss', $cod_producto, $nombre_producto);
      $insertar->execute();
      $insertar->close();
    }
    ?>
  </body>
</html>
