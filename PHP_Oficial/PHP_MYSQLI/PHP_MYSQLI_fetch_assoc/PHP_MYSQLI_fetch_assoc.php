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

$i = 0;
if ($resultado) {
  while ($fila = $resultado->fetch_assoc()) {
    echo '<pre>' . $i++ . " ";
    printf("%s (%s)\n", $fila["Name"], $fila["CountryCode"]);
    echo '</pre>';
  }

  if ($resultado != null) {
    $i = 0;
    foreach ($resultado as $fila) {
      echo '<br>' . $i++ . ' - ' . $fila["Name"] . " -" . $fila["CountryCode"];
    }
  }

  $resultado->free();
  $mysqli->close();
}
