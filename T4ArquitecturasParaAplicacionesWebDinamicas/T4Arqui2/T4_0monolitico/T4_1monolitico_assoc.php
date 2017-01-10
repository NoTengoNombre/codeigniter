<!--
    @Created on : 06-ene-2017, 13:22:30
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
//  modelo - objeto - conexion
    $db = new mysqli("localhost", "root", "", "portal");
    $result = $db->query('SELECT * FROM usuarios');
    ?>
    <h1>Listado de Articulos</h1>
    <?php
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Fecha</th></tr>";
    ?>
    <?php
    while ($fila = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $fila["nombre_usuario"] . " </td>";
      echo "<td>" . $fila["fechaNacimiento"] . " </td>";
      echo "</tr>";
    }
    echo "</table>";
    ?>
    <?php
    $result->free();
    $db->close();
    ?>
  </body>
</html>
