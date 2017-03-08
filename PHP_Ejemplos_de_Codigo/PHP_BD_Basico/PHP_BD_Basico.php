<!--
    @Created on : 20-dic-2016, 17:07:03
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
    $mysqli = new mysqli("localhost", "root", "", "world");

    var_dump($mysqli->connect_error);
    if ($mysqli->connect_error) {
      echo "Error de conexion a la BD : " . $mysqli->connect_error . " Error " . __LINE__ -1 . " ";
      die();
    }

    $query = "SELECT * FROM city";
    $resultado = $mysqli->query($query);
    $numregistros = $resultado->num_rows;
    echo "<p>El numero de Paises es: " . $numregistros . ".</p>";
    echo "<table border=2>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Country</th>
      <th>District</th> 
      <th>Population</th>
      </tr>";
    while ($registro = $resultado->fetch_assoc()) {
      echo "<tr>";
      foreach ($registro as $campo) {
        echo "<td>" . $campo . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
    $resultado->free();
    $mysqli->close();
    ?>
  </body>
</html>



