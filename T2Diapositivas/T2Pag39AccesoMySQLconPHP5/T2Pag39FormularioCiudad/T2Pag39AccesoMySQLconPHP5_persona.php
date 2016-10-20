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
    $conexdb = new mysqli('127.0.0.1', 'root', '', 'persona', '3306');
    if ($conexdb->connect_error) {
      die("<strong>Error en la conexion </strong>" . $conexdb->connect_error);
    } else {
      $nombre = filter_input(INPUT_POST, 'nombre');
      $apellidos = filter_input(INPUT_POST, 'apellidos');
      $conexdb->query("INSERT INTO hombre(nombre,apellidos) VALUES ('$nombre','$apellidos')");
      echo "Datos Añadidos correctamente";
    }
    ?>
  </body>
</html>
