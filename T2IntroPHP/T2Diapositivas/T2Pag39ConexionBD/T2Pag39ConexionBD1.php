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
    $db = mysqli_connect("localhost", "root", "", "paises");
    if (mysqli_connect_errno($db)) {
      echo "Fallo al conectar a MySQL : " . mysqli_connect_error();
    }

    $resultado = mysqli_query($db, "SELECT 'Un Mundo lleno de ' AS _msg FROM DUAL");
    $fila = mysqli_fetch_assoc($resultado);
    echo $fila['_msg'];
    ?>
  </body>
</html>
