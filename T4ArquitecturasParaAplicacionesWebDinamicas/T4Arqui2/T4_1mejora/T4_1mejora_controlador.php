<!--
    @Created on : 06-ene-2017, 13:18:58
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
//CONTROLADOR
$db = new mysqli("localhost", "root", "", "world2"); // modelo basico
$resultado = $db->query("SELECT * FROM city"); // modelo basico

//    crea un array para almacenar datos
$datos = array();

while ($fila = $resultado->fetch_array()) {
  $datos[] = $fila; // Almacena los datos de la consulta dentro array
}

$resultado->free();
$db->close();
?>

<?php
//Vuelcan los datos dentro de la vista
// La vista tiene una variable que se llama $datos
include('./T4_1mejora_vista.php');
?>
