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
    $db = new mysqli("localhost", "root", "", "paises");

    if ($db->connect_error) {
      die("Error en la conexion : " . $db->connect_error);
    }

    $resultado = $db->query("SELECT * FROM persona");

    echo '<table align="1"><tr>';
    echo '<th>Nombre</th>';
    echo '<th>Apellidos</th>';
    echo '<th>Edad</th>';
    echo '</tr>';

    while ($registro = $resultado->fetch_array()) {
      echo '<tr><td>' . $registro["nombre"] . '</td>';
      echo '<td>' . $registro["apellidos"] . '</td>';
      echo '<td>' . $registro["edad"] . '</td></tr>';
    }

//    mysqli_result::free($resultado); No Funciona
//    mysqli_result::free_result($resultado); No Funciona
    mysqli_free_result($resultado);
    $db->close();
    echo '<table>';
    ?>
  </body>
</html>
