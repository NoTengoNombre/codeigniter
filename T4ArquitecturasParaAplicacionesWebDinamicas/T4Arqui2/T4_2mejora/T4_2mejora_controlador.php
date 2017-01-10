<!--
    @Created on : 06-ene-2017, 13:18:58
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
include ('./T4_2mejora_modelo.php'); // modelo 
// llama al metodo
$datos = Paises::getPaises(); // vuelca todos los datos sobre el array $datos

require ('./T4_2mejora_vista.php');
?>
