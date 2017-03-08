<!--
    @Created on : 13-ene-2017, 18:51:10
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$mysqli = new mysqli("localhost", "root", "", "world");

if ($mysqli->connect_error) {
  printf("Connect failed : %s\n", $mysqli->connect_error);
  exit();
}

$query = "SELECT Name , CountryCode FROM city order by id limit 3";
$result = $mysqli->query($query);


//Array numerica
$row = $result->fetch_array(MYSQLI_NUM);
printf("%s (%s)\n", $row[0], $row[1]);

echo '<hr>';

$query1 = "SELECT Name , CountryCode FROM city order by id";
$result1 = $mysqli->query($query1);

$row1 = $result1->fetch_array(MYSQLI_ASSOC);
printf("%s (%s)\n", $row1["Name"], $row1["CountryCode"]);








