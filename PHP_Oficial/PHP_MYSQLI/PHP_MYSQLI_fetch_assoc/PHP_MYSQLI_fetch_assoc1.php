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

$consulta = "SELECT  Name , CountryCode FROM city ORDER BY ID DESC limit 50";

//objeto mysqli_result
$resultado = $mysqli->query($consulta);

if ($resultado) {
  while ($fila = $resultado->fetch_assoc()) {
    echo '<pre>';
    printf("%s (%s)\n", $fila["Name"], $fila["CountryCode"]);
    echo '</pre>';
  }

  $i = 0;

  if ($resultado != null) {
    foreach ($resultado as $fila) {
      ?>
      <?= '<br> fila ' . $i++ . '  : ' . $fila["Name"] . " - fila2 : " . $fila["CountryCode"]; ?>
      <?php
    }
  }

  $resultado->free();
  $mysqli->close();
}