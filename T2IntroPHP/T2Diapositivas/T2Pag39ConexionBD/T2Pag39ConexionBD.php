<!--
    @Created on : 30-oct-2016, 14:49:28
    @Author     : RVS - N.F.N.D
    @Pag        :
    @version    :
    @TODO       :
Insert - INSERT INTO `persona`(`id`, `nombre`, `apellidos`, `edad`) VALUES ('p1','Pepe','Perez',32)
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $conexion = new mysqli("localhost", "root", "", "paises");

    if ($conexion->connect_error) {
      
    }
    $conexion->query("SELECT * FROM ciudad");

    $conexion->affected_rows;
    ?>
  </body>
</html>
