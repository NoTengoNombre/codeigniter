<!--
    @Created on : 14-ene-2017, 17:12:58
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$c = new mysqli("localhost", "root", "", "world");

if ($c->connect_errno) {
  printf("Conexion fallida: %s\n", $mysqli->connect_error);
  exit();
}

//usando iteradores
foreach ($c->query("SELECT user,host FROM mysql.user") as $fila) {
  echo '<pre>';
  printf("'%s'@'%s'\n", $fila['user'], $fila['host']);
  echo '</pre>';
}

echo "\n=============\n";

$result = $c->query("SELECT user,host FROM mysql.user");

while ($fila = $result->fetch_assoc()) {
  echo '<pre>';
  printf("'%s'@'%s'\n", $fila['user'], $fila['host']);
  echo '</pre>';
}


$result->free();
$c->close();
