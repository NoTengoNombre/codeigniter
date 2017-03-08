<!--
    @Created on : 13-ene-2017, 21:07:45
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$mysqli = new mysqli("localhost", "root", "", "world");


$peticion = "SELECT * FROM city";

//Este objeto contiene informacion en forma de tabla y los metodos necesarios para recuperar esta informacion
$resultado = $mysqli->query($peticion);

if ($resultado) {
  printf("La seleccion devolvio %d filas \n", $resultado->num_rows);
  $resultado->close();
}
 
 


//Tenemos el nuevo objeto , recuperamos la informacion utilizando metodos
// fetch_array(); fetch_assoc() ; fetch_row(); del objeto mysqli_result





