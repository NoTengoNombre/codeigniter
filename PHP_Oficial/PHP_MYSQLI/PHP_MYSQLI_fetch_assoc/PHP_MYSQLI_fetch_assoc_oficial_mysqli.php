<!--
    @Created on : 14-ene-2017, 17:12:58
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$mysqli = new mysqli("localhost", "root", "", "world");

if ($mysqli->connect_errno) {
  printf("Conexion fallida: %s\n", $mysqli->connect_error);
  exit();
}

$consulta = "SELECT Name , CountryCode FROM city ORDER BY ID ASC limit 50";

//objeto mysqli_result
$resultado = $mysqli->query($consulta);

if ($resultado) {
  $i = 0;
  while ($row = $resultado->fetch_row()) {
    echo '<br>' . $i++ . ' - ';
    echo $row[0] . " - " . $row[1];
  }


  $resultado->free();
  $mysqli->close();
}
