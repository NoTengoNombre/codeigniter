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
    $conn = new mysqli("localhost", "root", "", "paises");

    if ($conn->connect_error) {
      
    }
    $conn->query("SELECT * FROM ciudad");

    $conn->affected_rows;
    ?>
  </body>
</html>
