<!DOCTYPE html>
<!--
    @Created on : 20-oct-2016, 16:55:33
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $conexdb = new mysqli('127.0.0.1', 'root', '', 'paises', '3306');
    if ($conexdb->connect_error) {
      die("Error en la conexion" . $conexdb->connect_error);
    } else {
      $id_ciudad = filter_input(INPUT_GET, 'id_ciudad');
      $capital = filter_input(INPUT_GET, 'capital');
      $pueblo = filter_input(INPUT_GET, 'pueblo');
      $poblacion = filter_input(INPUT_GET, 'poblacion');
      $conexdb->query("INSERT INTO ciudad (id_ciudad,capital,pueblo,poblacion) VALUES ('$id_ciudad','$capital','$pueblo','$poblacion')");
      echo "Inserccion correcta";
    }
    ?>
  </body>
</html>
