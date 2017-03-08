<!--
    @Created on : 13-ene-2017, 18:51:10
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$mysqli = new mysqli("localhost", "root", "", "world");

//print_r($mysqli);

if ($mysqli->connect_error) {
  printf("Connect failed : %s\n", $mysqli->connect_error);
  exit();
}
//objeto 
$query = "SELECT Name , CountryCode FROM city order by id limit 3";

//objeto 
$result = $mysqli->query($query);

//Array numerica
$result->fetch_array(MYSQLI_NUM);

$result->fetch_array(MYSQLI_ASSOC);

$row = $result->fetch_array(MYSQLI_ASSOC);

ECHO '<PRE>';
printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
ECHO '</PRE>';


//print_r($mysqli);



