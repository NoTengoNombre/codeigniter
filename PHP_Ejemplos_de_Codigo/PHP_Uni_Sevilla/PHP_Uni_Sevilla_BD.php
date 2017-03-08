<!--
    @Created on : 20-dic-2016, 12:18:38
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
//    Estamos trabajando con POO
    $mysqli = new mysqli('localhost', 'root', '', 'world');

    if ($mysqli->connect_errno) {
      printf("Conexion fallida: %s\n", mysqli_connect_error());
      exit();
    }

//    echo "Conexion correcta con la base de datos <br> <b>: " . $mysqli->host_info . " </b><br>";
//    if ($mysqli->query("SELECT Code , Name FROM Country ORDER BY Name")) {
//      $row_cnt = $mysqli->affected_rows;
//      printf("Result set has %d rows. \n", $row_cnt);
//      print_r($row_cnt); devuelve el numero de filas
//      var_dump($row_cnt); devuelve el numero de filas
//    }
//    $query = "SELECT * from city WHERE Name LIKE %U LIMIT 10 ORDER BY District DESC;";

    $query = "SELECT * FROM city";
    $resultado = $mysqli->query($query)
            or die($mysqli->error . "en la linea " . (__LINE__ - 1));

    $numregistro = $resultado->num_rows;
    echo "<p>El numero de ciudades con nombre es : ", $numregistro, "</p>";

    echo "<table border><tr><th>Id</th><th>Nombre</th><th>CountryCode</th><th>District</th><th>Population</th><tr>";
    while ($registro = $resultado->fetch_assoc()) {
      echo "<tr>";
      foreach ($registro as $campo) {
        echo "<td>", $campo, "</td>";
        echo "</tr>";
      }
      echo "</table>";
    }
    $resultado->free();


    $cerrar = $mysqli->close();
    if ($cerrar) {
      echo "<br>Cerrar conexion";
    } else {
      echo "<br>No Cerrar conexion";
    }

    echo $cerrada = $cerrar ? "<p style = 'color : red;'>Si esta cerrada </p> " : "<p style = 'color: blue;'>No esta cerrada </p>";
    ?>
  </body>
</html>
