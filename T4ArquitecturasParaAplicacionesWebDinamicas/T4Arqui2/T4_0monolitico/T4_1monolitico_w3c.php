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

    if ($db->connect_errno) {
      die("Connection failed : " . $db->connect_error);
    }
    ?>
    <h1>Listado de Articulos</h1>
    <?php
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Fecha</th></tr>";
    ?>
    <?php
    if ($result->num_rows > 0) {
      $fila = $result->num_rows;
      echo "Numero de filas : " . $fila . '<br><br>';
    } else {
      echo $fila . "resultado";
    }

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