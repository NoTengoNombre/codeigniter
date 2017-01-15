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


$resultado = $mysqli->query($sql);

$row = $resultado->fetch_array(MYSQLI_NUM);

echo $row[0] . " - " . $row[1] . " - " . $row[2] . " - " . $row[3] . " - " . $row[4];

var_dump($row);

$resultado->free();

$mysqli->close();
