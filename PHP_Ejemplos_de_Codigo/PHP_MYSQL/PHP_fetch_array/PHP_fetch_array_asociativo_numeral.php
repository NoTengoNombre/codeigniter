<!--
    @Created on : 13-ene-2017, 18:51:10
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
//crea objeto
$mysqli = new mysqli("localhost", "root", "", "world");

if ($mysqli->connect_error) {
  printf("Connect failed : %s\n", $mysqli->connect_error);
  exit();
}

//string
$query = "SELECT Name , CountryCode FROM city ORDER BY ID LIMIT 3";

//objeto invoca funcion recibe un string
$result = $mysqli->query($query);

//Array numerica
$result->fetch_array(MYSQLI_NUM);

$result->fetch_array(MYSQLI_ASSOC);


$row = $result->fetch_array(MYSQLI_ASSOC);
echo gettype($row) . '<br><br>';
printf("%s - (%s)\n", $row["Name"], $row["CountryCode"]);
echo '<br><br>';

echo '<hr>';




