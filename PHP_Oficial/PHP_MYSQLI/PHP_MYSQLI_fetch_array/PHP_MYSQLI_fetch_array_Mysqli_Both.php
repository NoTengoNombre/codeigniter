<!--
    @Created on : 14-ene-2017, 18:30:29
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$mysqli = new mysqli("localhost", "root", "", "world");

if ($mysqli->connect_errno) {
  echo "Error conexion " . $mysqli->connect_error;
  exit();
}

$sql = "SELECT * FROM city ORDER BY ID ASC LIMIT 20";

//mysqli_set_charset($mysqli, "utf-8");

$resultado = $mysqli->query($sql);

while ($row = $resultado->fetch_array(MYSQLI_BOTH)) {
  $rows[] = $row;
}

foreach ($rows as $row) {
  echo '<br>' . $row[0] . " - " . $row['Name'] . " - " . $row[2];
}

$resultado->free();

$mysqli->close();
